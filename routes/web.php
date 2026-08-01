<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Pre-baked admin routes (STATIC — generated apps must NEVER touch these)
|--------------------------------------------------------------------------
| Session-based admin auth + dashboard + user management, wired to the
| pre-baked controllers. These live in web.php (not the AI-owned app.php) so
| a generated app can never rewrite or break them. The session guard lives
| inside each controller — do NOT add ->middleware('auth') (the admin does
| not use Laravel's auth guard; that would redirect to an undefined `login`
| route). For a no-admin app, simply don't link to /admin/login.
*/
Route::get('/admin/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'login']);
Route::post('/admin/logout', [App\Http\Controllers\Admin\AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

// Pre-baked admin user management over the boilerplate users table.
Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');

// The generated app's OWN routes (Livewire pages via Route::livewire, custom
// endpoints) live in routes/app.php — the AI-owned route file. This file
// stays static; the generated app re-emits app.php only.
require __DIR__.'/app.php';

require __DIR__.'/settings.php';

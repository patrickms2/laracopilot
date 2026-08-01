<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

/**
 * Pre-baked admin user management over the boilerplate users table (blade
 * stack). Drafts must never define a User model or controller (reserved
 * table) — this module covers "admin panel for users" requests instead.
 * Generated apps link /admin/users from the sidebar; the routes live in the
 * static routes/web.php, so AI re-emissions of routes/app.php cannot lose them.
 */
class UserController extends Controller
{
    public function index()
    {
        if (! session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        return view('admin.users.index', [
            'users' => User::orderBy('name')->get(['id', 'name', 'email', 'created_at']),
        ]);
    }

    public function create()
    {
        if (! session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        if (! session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        if (! session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        if (! session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8'],
        ]);

        // Blank password on the edit form means "keep the current one".
        if (empty($validated['password'])) {
            unset($validated['password']);
        } else {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        if (! session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $user->delete();

        return redirect()->route('admin.users.index');
    }
}

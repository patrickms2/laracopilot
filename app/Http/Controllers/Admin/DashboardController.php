<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Minimal pre-baked dashboard (blade stack). Generated apps replace this
 * with a domain-specific version (KPI queries) by emitting a new file —
 * which is safe: this is boilerplate, not Blueprint output.
 */
class DashboardController extends Controller
{
    public function index()
    {
        if (! session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        return view('admin.dashboard');
    }
}

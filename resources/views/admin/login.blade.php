<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login — {{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    {{--
        Pre-baked admin login (session-based admin auth). Self-contained branded
        page — matches the react/blade/vue stacks (gradient + white card, NO
        Laravel logo). The demo credentials shown here MUST stay byte-identical
        to the $credentials array in AdminAuthController.
    --}}
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 to-slate-700 px-4">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-md">
            <h1 class="text-2xl font-bold text-slate-900 mb-1">Admin Login</h1>
            <p class="text-sm text-slate-500 mb-6">Sign in to manage your application</p>

            <div class="bg-blue-50 border border-blue-200 rounded p-4 mb-6 text-sm text-slate-700">
                <p class="font-semibold mb-2">Demo credentials</p>
                <p>Email: <code>admin@business.com</code></p>
                <p>Password: <code>admin123</code></p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 rounded p-3 mb-4 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="/admin/login" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                        autocomplete="email"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-slate-500" />
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                    <input id="password" name="password" type="password" required
                        autocomplete="current-password"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-slate-500" />
                </div>
                <button type="submit"
                    class="w-full bg-slate-900 text-white rounded-lg py-2.5 font-medium hover:bg-slate-800">
                    Sign in
                </button>
            </form>
        </div>
    </div>
</body>
</html>

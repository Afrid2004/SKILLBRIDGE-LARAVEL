@extends('layouts.auth.app')

@section('title', 'Login - SkillBridge')

@section('content')


    <div class="w-full max-w-sm">

        {{-- Login Card --}}
        <div class="bg-white border border-slate-200 rounded-2xl p-5 sm:p-6 shadow-sm">

            {{-- Heading --}}
            <div class="mb-5">
                <h1 class="text-lg sm:text-2xl font-bold text-slate-900">
                    Welcome back
                </h1>

                <p class="text-[11px] sm:text-xs text-slate-500 mt-1">
                    Log in to continue to SkillBridge
                </p>
            </div>

            {{-- Session Status --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            {{-- Login Form --}}
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-xs font-medium text-slate-600 mb-1.5">
                        Email address
                    </label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        placeholder="you@example.com" autocomplete="username" required autofocus
                        class="w-full h-9 sm:h-10  px-3 rounded-lg border border-slate-200 bg-white text-sm text-slate-800 placeholder:text-slate-400 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                    @error('email')
                        <p class="mt-1.5 text-[10px] text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-xs font-medium text-slate-600 mb-1.5">
                        Password
                    </label>

                    <div class="relative">
                        <input id="password" type="password" name="password" placeholder="••••••••••"
                            autocomplete="current-password" required
                            class="w-full h-9 sm:h-10 pl-3 pr-10 rounded-lg border border-slate-200 bg-white text-sm text-slate-800 placeholder:text-slate-400 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                        <button type="button" onclick="togglePassword()"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                            <i id="password-icon" class="bi bi-eye text-sm cursor-pointer"></i>
                        </button>
                    </div>

                    @error('password')
                        <p class="mt-1.5 text-[10px] text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Remember + Forgot --}}
                <div class="flex items-center justify-between">

                    <label class="flex items-center gap-2 cursor-pointer">
                        <input id="remember" type="checkbox" name="remember"
                            class="w-3 h-3 rounded border-slate-300 text-primary focus:ring-primary">

                        <span class="text-xs text-slate-500">
                            Remember me
                        </span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs text-primary hover:text-primary-dark">
                            Forgot password?
                        </a>
                    @endif

                </div>

                {{-- Login Button --}}
                <button type="submit"
                    class="w-full h-9 sm:h-10 rounded-lg bg-primary text-white text-sm font-semibold hover:bg-primary-dark active:scale-[0.99] transition">
                    Log in
                </button>

            </form>

            {{-- Register --}}
            <p class="text-center text-xs text-slate-500 mt-4">
                New to SkillBridge?

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-primary font-medium hover:text-primary-dark">
                        Create account
                    </a>
                @endif
            </p>

        </div>

    </div>

    {{-- Password Toggle --}}
    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const icon = document.getElementById('password-icon');

            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        }
    </script>


@endsection

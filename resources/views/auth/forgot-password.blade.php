@extends('layouts.auth.app')

@section('title', 'Forgot Password - SkillBridge')

@section('content')

    <div class="w-full max-w-sm">

        <div class="bg-white border border-slate-200 rounded-2xl p-5 sm:p-6 shadow-sm">

            {{-- Heading --}}
            <div class="mb-5">
                <h1 class="text-lg sm:text-2xl font-bold text-slate-900">
                    Forgot password?
                </h1>

                <p class="text-[11px] sm:text-xs text-slate-500 mt-1">
                    Enter your email — we'll send a reset link
                </p>
            </div>

            {{-- Session Status --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            {{-- Forgot Password Form --}}
            <form method="POST" action="{{ route('password.email') }}" class="space-y-3">
                @csrf

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-xs font-medium text-slate-600 mb-1.5">
                        Email address
                    </label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        placeholder="you@example.com" autocomplete="email" required autofocus
                        class="w-full h-9 sm:h-10 px-3 rounded-lg border border-slate-200 bg-white text-sm text-slate-800 placeholder:text-slate-400 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                    @error('email')
                        <p class="mt-1.5 text-[10px] text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full h-9 sm:h-10 rounded-lg bg-primary text-white text-sm font-semibold hover:bg-primary-dark active:scale-[0.99] transition">
                    Send reset link
                </button>
            </form>

            {{-- Back to Login --}}
            <a href="{{ route('login') }}"
                class="w-full h-9 sm:h-10 mt-2 rounded-lg border border-slate-200 bg-white text-sm text-slate-800 font-medium hover:bg-slate-50 transition flex items-center justify-center">
                Back to login
            </a>

        </div>

    </div>

@endsection

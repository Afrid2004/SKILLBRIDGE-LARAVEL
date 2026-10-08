@extends('layouts.auth.app')

@section('title', 'Create Account - SkillBridge')

@section('content')

    <div class="w-full max-w-sm">
        <div class="bg-white border border-slate-200 rounded-2xl p-5 sm:p-6 shadow-sm">

            <div class="mb-5">
                <h1 class="text-lg sm:text-2xl font-bold text-slate-900">Create your account</h1>
                <p class="text-[11px] sm:text-xs text-slate-500 mt-1">Join 29,000+ Bangladeshis on SkillBridge</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                {{-- Role Switch --}}
                <div>
                    <div class="flex items-center p-1 bg-slate-100 rounded-lg h-9 sm:h-10">
                        <button type="button" id="clientBtn" onclick="selectRole('client')"
                            class="role-btn flex-1 h-full rounded-md bg-white text-xs sm:text-sm font-medium text-slate-800 shadow-sm transition cursor-pointer">I'm
                            a Client</button>
                        <button type="button" id="freelancerBtn" onclick="selectRole('freelancer')"
                            class="role-btn flex-1 h-full rounded-md text-xs sm:text-sm font-medium text-slate-500 transition cursor-pointer">I'm
                            a Freelancer</button>
                    </div>

                    <input type="hidden" name="role" id="role" value="{{ old('role', 'client') }}">

                    @error('role')
                        <p class="mt-1.5 text-[10px] text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Full Name --}}
                <div>
                    <label for="name" class="block text-xs font-medium text-slate-600 mb-1.5">Full name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                        placeholder="Your full name" autocomplete="name" required autofocus
                        class="w-full h-9 sm:h-10 px-3 rounded-lg border border-slate-200 bg-white text-sm text-slate-800 placeholder:text-slate-400 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                    @error('name')
                        <p class="mt-1.5 text-[10px] text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-xs font-medium text-slate-600 mb-1.5">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        placeholder="you@example.com" autocomplete="username" required
                        class="w-full h-9 sm:h-10 px-3 rounded-lg border border-slate-200 bg-white text-sm text-slate-800 placeholder:text-slate-400 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                    @error('email')
                        <p class="mt-1.5 text-[10px] text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label for="password" class="block text-xs font-medium text-slate-600 mb-1.5">Password</label>

                        <div class="relative">
                            <input id="password" type="password" name="password" placeholder="••••••••"
                                autocomplete="new-password" required
                                class="w-full h-9 sm:h-10 pl-3 pr-9 rounded-lg border border-slate-200 bg-white text-sm text-slate-800 placeholder:text-slate-400 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            <button type="button" onclick="togglePassword('password', 'password-icon')"
                                class="absolute right-2.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                                <i id="password-icon" class="bi bi-eye text-sm cursor-pointer"></i>
                            </button>
                        </div>

                        @error('password')
                            <p class="mt-1.5 text-[10px] text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div>
                        <label for="password_confirmation"
                            class="block text-xs font-medium text-slate-600 mb-1.5">Confirm</label>

                        <div class="relative">
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                placeholder="••••••••" autocomplete="new-password" required
                                class="w-full h-9 sm:h-10 pl-3 pr-9 rounded-lg border border-slate-200 bg-white text-sm text-slate-800 placeholder:text-slate-400 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            <button type="button" onclick="togglePassword('password_confirmation', 'confirm-icon')"
                                class="absolute right-2.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                                <i id="confirm-icon" class="bi bi-eye text-sm cursor-pointer"></i>
                            </button>
                        </div>

                        @error('password_confirmation')
                            <p class="mt-1.5 text-[10px] text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Register Button --}}
                <button type="submit"
                    class="w-full h-9 sm:h-10 rounded-lg bg-primary text-white text-sm font-semibold hover:bg-primary-dark active:scale-[0.99] transition">Create
                    account</button>
            </form>

            {{-- Login --}}
            <p class="text-center text-xs text-slate-500 mt-3">Already have an account? <a href="{{ route('login') }}"
                    class="text-primary font-medium hover:text-primary-dark">Log in</a></p>

        </div>
    </div>

    <script>
        function selectRole(role) {
            const roleInput = document.getElementById('role');
            const clientBtn = document.getElementById('clientBtn');
            const freelancerBtn = document.getElementById('freelancerBtn');

            roleInput.value = role;

            if (role === 'client') {
                clientBtn.classList.add('bg-white', 'text-slate-800', 'shadow-sm');
                clientBtn.classList.remove('text-slate-500');
                freelancerBtn.classList.remove('bg-white', 'text-slate-800', 'shadow-sm');
                freelancerBtn.classList.add('text-slate-500');
            } else {
                freelancerBtn.classList.add('bg-white', 'text-slate-800', 'shadow-sm');
                freelancerBtn.classList.remove('text-slate-500');
                clientBtn.classList.remove('bg-white', 'text-slate-800', 'shadow-sm');
                clientBtn.classList.add('text-slate-500');
            }
        }

        function togglePassword(inputId, iconId) {
            const password = document.getElementById(inputId);
            const icon = document.getElementById(iconId);

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

        document.addEventListener('DOMContentLoaded', function() {
            selectRole(document.getElementById('role').value);
        });
    </script>

@endsection

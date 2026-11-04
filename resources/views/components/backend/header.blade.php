<header
    class="relative z-30 flex h-20 shrink-0 items-center justify-between border-b border-slate-200 bg-white px-4 sm:px-6 lg:px-8">

    {{-- Left Side --}}
    {{-- Left Side --}}
    <div class="flex min-w-0 items-center gap-3">

        {{-- Sidebar Toggle --}}
        <button onclick="toggleSidebar()"
            class="flex h-10 w-10 shrink-0 cursor-pointer items-center justify-center rounded-xl text-slate-600 transition hover:bg-blue-50 hover:text-primary"
            aria-label="Toggle sidebar">
            <i class="bi bi-layout-sidebar-inset text-xl"></i>
        </button>

        {{-- Page Title & Welcome Message --}}
        <div class="min-w-0">
            <h1 class="truncate text-base font-semibold tracking-tight text-slate-900 sm:text-lg">
                @yield('page-title', 'Dashboard')
            </h1>
        </div>

    </div>

    {{-- Right Side --}}
    <div class="flex shrink-0 items-center gap-2 sm:gap-4">

        {{-- Search --}}
        <div class="hidden md:block">
            <div class="relative">
                <svg class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7" stroke-width="1.8" />
                    <path d="m16 16 4 4" stroke-width="1.8" stroke-linecap="round" />
                </svg>

                <input type="text" placeholder="Search..."
                    class="w-48 rounded-xl border border-slate-200 bg-slate-50 py-2 pl-9 pr-3 text-sm outline-none transition focus:border-indigo-400 focus:bg-white focus:ring-2 focus:ring-indigo-100 lg:w-64">
            </div>
        </div>

        {{-- Notification --}}
        <button type="button"
            class="relative flex h-10 w-10 items-center justify-center rounded-xl text-slate-500 transition hover:bg-slate-100 hover:text-indigo-600"
            aria-label="Notifications">

            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M18 8a6 6 0 00-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span class="absolute right-2 top-2 h-2 w-2 rounded-full bg-rose-500 ring-2 ring-white"></span>

        </button>

        {{-- User Profile --}}
        <div class="flex items-center gap-2 border-l border-slate-200 pl-3 sm:pl-4">
            <div
                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-indigo-100 font-bold text-indigo-700">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>

            <div class="hidden sm:block">
                <p class="max-w-28 truncate text-sm font-semibold text-slate-800">
                    {{ Auth::user()->name }}
                </p>
                <p class="text-xs capitalize text-slate-500">
                    {{ Auth::user()->getRoleNames()->first() }}
                </p>
            </div>

            {{-- Logout --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"
                    class="ml-1 flex h-9 w-9 items-center justify-center rounded-lg text-slate-500 transition hover:bg-rose-50 hover:text-rose-600"
                    title="Logout">

                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M10 17l5-5-5-5M15 12H3m9-9h6a2 2 0 012 2v14a2 2 0 01-2 2h-6" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
            </form>

        </div>

    </div>

</header>

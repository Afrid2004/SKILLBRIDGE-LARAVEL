<aside id="backendSidebar"
    class="fixed inset-y-0 left-0 z-50 flex w-64 -translate-x-full flex-col border-r border-slate-200 bg-white transition-all duration-300 ease-in-out lg:static lg:z-30 lg:w-64 lg:translate-x-0">

    {{-- Logo --}}
    <div class="flex h-20 shrink-0 items-center justify-between border-b border-slate-100 px-5">

        <a href="{{ route('home.index') }}" class="sidebar-logo-text flex items-center gap-2.5 overflow-hidden">
            <img id="logoFull" src="{{ asset('assets/images/skillbridge.png') }}" alt="SkillBridge"
                class="h-auto w-36 shrink-0 object-contain">
            <img id="logoShort" src="{{ asset('assets/images/logoshort.png') }}" alt="SkillBridge"
                class="hidden h-10 w-10 shrink-0 object-contain">
        </a>

        {{-- Mobile Close --}}
        <button onclick="closeSidebar()" class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 lg:hidden"
            aria-label="Close sidebar">
            <i class="bi bi-x-lg text-lg"></i>
        </button>

    </div>

    {{-- Navigation --}}
    <nav class="flex-1 space-y-7 overflow-y-auto px-3 py-6">

        {{-- Main Menu --}}
        <div>
            <p class="sidebar-label mb-3 px-3 text-[10px] font-bold uppercase tracking-[0.15em] text-slate-400">
                Main Menu
            </p>

            <div class="space-y-1">

                {{-- Dashboard --}}
                <a href="{{ route('dashboard') }}"
                    class="sidebar-link group relative flex items-center gap-3 rounded-xl bg-blue-50 px-3 py-3 text-sm font-semibold text-primary transition hover:bg-blue-100"
                    title="Dashboard">
                    <i class="bi bi-grid-1x2-fill h-5 w-5 shrink-0 text-lg"></i>
                    <span class="sidebar-label whitespace-nowrap">Dashboard</span>
                </a>

                {{-- Find Freelancers --}}
                <a href="#"
                    class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                    title="Find Freelancers">
                    <i class="bi bi-search h-5 w-5 shrink-0 text-lg"></i>
                    <span class="sidebar-label whitespace-nowrap">Find Freelancers</span>
                </a>

                {{-- Post a Project --}}
                <a href="#"
                    class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                    title="Post a Project">
                    <i class="bi bi-plus-square h-5 w-5 shrink-0 text-lg"></i>
                    <span class="sidebar-label whitespace-nowrap">Post a Project</span>
                </a>

                {{-- My Projects --}}
                <a href="#"
                    class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                    title="My Projects">
                    <i class="bi bi-briefcase h-5 w-5 shrink-0 text-lg"></i>
                    <span class="sidebar-label whitespace-nowrap">My Projects</span>
                </a>

                {{-- Proposals --}}
                <a href="#"
                    class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                    title="Proposals">
                    <i class="bi bi-file-earmark-text h-5 w-5 shrink-0 text-lg"></i>
                    <span class="sidebar-label whitespace-nowrap">Proposals</span>
                </a>

                {{-- Messages --}}
                <a href="#"
                    class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                    title="Messages">
                    <i class="bi bi-chat-dots h-5 w-5 shrink-0 text-lg"></i>
                    <span class="sidebar-label whitespace-nowrap">Messages</span>
                </a>

            </div>
        </div>

        {{-- Account --}}
        <div>
            <p class="sidebar-label mb-3 px-3 text-[10px] font-bold uppercase tracking-[0.15em] text-slate-400">
                Account
            </p>

            <div class="space-y-1">

                {{-- Payments --}}
                <a href="#"
                    class="sidebar-link flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                    title="Payments">
                    <i class="bi bi-wallet2 h-5 w-5 shrink-0 text-lg"></i>
                    <span class="sidebar-label whitespace-nowrap">Payments</span>
                </a>

                {{-- Profile Settings --}}
                <a href="{{ route('profile.edit') }}"
                    class="sidebar-link flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                    title="Profile Settings">
                    <i class="bi bi-person-circle h-5 w-5 shrink-0 text-lg"></i>
                    <span class="sidebar-label whitespace-nowrap">Profile Settings</span>
                </a>

            </div>
        </div>

    </nav>

    {{-- Sidebar Bottom --}}
    <div class="shrink-0 border-t border-slate-100 p-4">

        <div class="flex items-center gap-3 rounded-xl bg-slate-50 p-3">

            <div
                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-100 font-bold text-primary">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>

            <div class="sidebar-label min-w-0">
                <p class="truncate text-sm font-semibold text-slate-800">
                    {{ Auth::user()->name }}
                </p>
                <p class="text-xs capitalize text-slate-500">
                    {{ Auth::user()->role }}
                </p>
            </div>

        </div>

    </div>

</aside>

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
        <div>

            {{-- Main Menu --}}
            <div>
                <p class="sidebar-label mb-3 px-3 text-[10px] font-bold uppercase tracking-[0.15em] text-slate-400">
                    Main Menu
                </p>

                <div class="space-y-1">

                    {{-- Dashboard --}}
                    @can('view dashboard')
                        <a href="{{ route('dashboard') }}"
                            class="sidebar-link group relative flex items-center gap-3 rounded-xl bg-blue-50 px-3 py-3 text-sm font-semibold text-primary transition hover:bg-blue-100"
                            title="Dashboard">
                            <i class="bi bi-grid-1x2-fill h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Dashboard</span>
                        </a>
                    @endcan

                    {{-- User Management --}}
                    @canany(['manage admins', 'view users', 'manage users', 'suspend users', 'verify users'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="User Management">
                            <i class="bi bi-people h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">User Management</span>
                        </a>
                    @endcanany

                    {{-- Roles & Permissions --}}
                    @canany(['view roles', 'manage roles', 'view permissions', 'manage permissions'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Roles & Permissions">
                            <i class="bi bi-shield-lock h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Roles & Permissions</span>
                        </a>
                    @endcanany

                    {{-- Categories & Skills --}}
                    @canany(['view categories', 'manage categories', 'view skills', 'manage skills'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Categories & Skills">
                            <i class="bi bi-grid h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Categories & Skills</span>
                        </a>
                    @endcanany

                    {{-- Find Freelancers --}}
                    @canany(['browse freelancers', 'view freelancer profiles'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Find Freelancers">
                            <i class="bi bi-search h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Find Freelancers</span>
                        </a>
                    @endcanany

                    {{-- My Profile --}}
                    @canany(['manage own profile', 'manage own portfolio', 'manage own skills'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="My Profile">
                            <i class="bi bi-person-workspace h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">My Profile</span>
                        </a>
                    @endcanany

                    {{-- Projects --}}
                    @canany(['browse projects', 'view projects'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Find Projects">
                            <i class="bi bi-search h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Find Projects</span>
                        </a>
                    @endcanany

                    @canany([
                        'view own projects',
                        'create projects',
                        'edit own projects',
                        'delete own projects',
                        'close
                        own projects',
                        ])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="My Projects">
                            <i class="bi bi-briefcase h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">My Projects</span>
                        </a>
                    @endcanany

                    @canany(['manage all projects', 'approve projects'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="All Projects">
                            <i class="bi bi-briefcase-fill h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">All Projects</span>
                        </a>
                    @endcanany

                    {{-- Proposals --}}
                    @canany(['view proposals', 'submit proposals', 'edit own proposals', 'withdraw own proposals',
                        'manage received proposals'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Proposals">
                            <i class="bi bi-file-earmark-text h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Proposals</span>
                        </a>
                    @endcanany

                    {{-- Contracts --}}
                    @canany([
                        'view own contracts',
                        'manage own contracts',
                        'view all contracts',
                        'manage all
                        contracts',
                        ])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Contracts">
                            <i class="bi bi-file-earmark-check h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Contracts</span>
                        </a>
                    @endcanany

                    {{-- Services --}}
                    @canany(['view services', 'manage own services', 'manage all services'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Services">
                            <i class="bi bi-box-seam h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Services</span>
                        </a>
                    @endcanany

                    {{-- Messages --}}
                    @canany(['view messages', 'send messages', 'manage messages'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Messages">
                            <i class="bi bi-chat-dots h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Messages</span>
                        </a>
                    @endcanany

                    {{-- Payments & Earnings --}}
                    @canany(['view own payments', 'manage own payments', 'view transactions', 'view own earnings',
                        'manage payments', 'manage withdrawals', 'request withdrawals'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Payments & Earnings">
                            <i class="bi bi-wallet2 h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Payments & Earnings</span>
                        </a>
                    @endcanany

                    {{-- Reviews --}}
                    @canany(['view reviews', 'create reviews', 'manage reviews'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Reviews & Ratings">
                            <i class="bi bi-star h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Reviews & Ratings</span>
                        </a>
                    @endcanany

                    {{-- Reports & Settings --}}
                    @canany(['view reports', 'manage reports', 'manage settings'])
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Reports & Settings">
                            <i class="bi bi-gear h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Reports & Settings</span>
                        </a>
                    @endcanany

                    {{-- Notifications --}}
                    @can('view notifications')
                        <a href="#"
                            class="sidebar-link group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-primary"
                            title="Notifications">
                            <i class="bi bi-bell h-5 w-5 shrink-0 text-lg"></i>
                            <span class="sidebar-label whitespace-nowrap">Notifications</span>
                        </a>
                    @endcan

                </div>
            </div>




            {{-- এখানে শুধু Admin Role থাকা ইউজারই Menu-গুলো দেখতে পাবে। তাহলে @can কখন লাগবে? যেকোনো Role-এর এমন ইউজার Menu-টি দেখতে পাবে, যার manage users Permission আছে। --}}
            {{-- role wise sidebar using spite optional --}}
            {{-- @role('admin')
                <a href="#">User Management</a>
                <a href="#">All Projects</a>
            @endrole --}}
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
                    {{ Auth::user()->getRoleNames()->first() }}
                </p>
            </div>

        </div>

    </div>

</aside>

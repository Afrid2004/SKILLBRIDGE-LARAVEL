<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') | SkillBridge</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

    <div class="flex h-screen max-h-screen overflow-hidden">

        {{-- Sidebar --}}
        @include('components.backend.sidebar')

        {{-- Mobile Sidebar Overlay --}}
        <div id="sidebarOverlay" class="fixed inset-0 z-40 hidden bg-slate-950/50 backdrop-blur-sm lg:hidden"
            onclick="closeSidebar()">
        </div>

        {{-- Main Area --}}
        <div class="flex min-w-0 flex-1 flex-col overflow-hidden">

            {{-- Fixed Header --}}
            @include('components.backend.header')

            {{-- Scrollable Main Content --}}
            <main id="mainContent" class="min-h-0 flex-1 overflow-y-auto overscroll-contain">

                <div class="mx-auto w-full max-w-[1600px] p-4 sm:p-6 lg:p-8">

                    @yield('content')

                </div>

                {{-- Footer --}}
                <footer class="border-t border-slate-200 bg-white px-6 py-4">
                    <p class="text-center text-xs text-slate-500">
                        © {{ date('Y') }} SkillBridge. All rights reserved.
                    </p>
                </footer>

            </main>

        </div>

    </div>

    @stack('scripts')

    <script>
        const sidebar = document.getElementById('backendSidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const logoFull = document.getElementById('logoFull');
        const logoShort = document.getElementById('logoShort');

        let isCollapsed = false;

        function toggleSidebar() {
            if (window.innerWidth >= 1024) {

                isCollapsed = !isCollapsed;

                sidebar.classList.toggle('lg:w-20', isCollapsed);
                sidebar.classList.toggle('lg:w-64', !isCollapsed);

                // Logo change
                logoFull.classList.toggle('hidden', isCollapsed);
                logoShort.classList.toggle('hidden', !isCollapsed);

                // Sidebar labels
                document.querySelectorAll('.sidebar-label').forEach(item => {
                    item.classList.toggle('lg:hidden', isCollapsed);
                });

                // Sidebar links
                document.querySelectorAll('.sidebar-link').forEach(item => {
                    item.classList.toggle('lg:justify-center', isCollapsed);
                    item.classList.toggle('lg:px-2', isCollapsed);
                    item.classList.toggle('lg:px-3', !isCollapsed);
                });

            } else {
                openSidebar();
            }
        }

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        // Close mobile sidebar after navigation
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    closeSidebar();
                }
            });
        });

        // Responsive resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('hidden');
            } else {
                closeSidebar();
            }
        });
    </script>


</body>

</html>

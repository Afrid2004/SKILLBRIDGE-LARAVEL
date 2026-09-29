<header>
    <div class="bg-white border-b border-gray-100">
        <div class="container">
            <div class="flex items-center justify-between gap-5 py-3">
                {{-- common --}}
                <div class="w-35">
                    <a href="{{ route('home.index') }}">
                        <img class="w-full" src="{{ asset('/assets/images/skillbridge.png') }}" alt="skillbridge">
                    </a>
                </div>

                {{-- desktop --}}
                <div class="hidden md:flex">
                    <nav>
                        <ul class="flex items-center gap-6">
                            @foreach ($menus as $menu)
                                <li>
                                    <a href="{{ $menu['url'] }}"
                                        class="{{ request()->routeIs($menu['route']) ? 'text-primary font-medium' : 'text-slate-700 hover:text-primary' }}">
                                        {{ $menu['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

                {{-- desktop and mobile --}}
                <div class="flex items-center gap-3">
                    {{-- auth menu --}}
                    <div class="hidden sm:flex items-center justify-center gap-2">
                        <a href="/login"
                            class="text-sm rounded-4xl border border-gray-200/70 px-4 py-2 hover:bg-gray-100 duration-150">Log
                            in</a>
                        <a href="/signup"
                            class="text-sm rounded-4xl px-4 py-2 bg-secondary duration-150 text-primary-light hover:bg-primary">Sign
                            up free</a>
                    </div>

                    {{-- mobile toggler --}}
                    <div
                        class="menuOpen w-10 h-10 rounded-full flex md:hidden items-center justify-center bg-secondary hover:bg-primary cursor-pointer active:scale-[0.95]">
                        <i class="bi bi-list text-primary-light text-lg"></i>
                    </div>
                </div>

                {{-- mobile --}}
                <div
                    class="menuModal group opacity-0 pointer-events-none [&.active]:opacity-100 [&.active]:pointer-events-auto fixed transition-all duration-150 top-0 left-0 bg-secondary/50 w-full h-screen overflow-hidden flex md:hidden justify-end">
                    <div
                        class="menuDrawer translate-x-full transition-transform duration-300 group-[.active]:translate-x-0 w-sm bg-primary-light h-full">
                        <div class="border-b border-gray-200">
                            <div class="flex items-center justify-between gap-3 p-3">
                                <div class="w-30">
                                    <a href="{{ route('home.index') }}">
                                        <img class="w-full" src="{{ asset('/assets/images/skillbridge.png') }}"
                                            alt="skillbridge">
                                    </a>
                                </div>
                                <div
                                    class="menuClose w-9 h-9 rounded-full flex items-center justify-center bg-secondary hover:bg-primary cursor-pointer active:scale-[0.95]">
                                    <i class="bi bi-x-lg text-sm text-primary-light leading-none"></i>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 mt-3">
                            <nav>
                                <ul class="flex flex-col gap-3">
                                    @foreach ($menus as $menu)
                                        <li>
                                            <a href="{{ $menu['url'] }}"
                                                class="mobileMenus {{ request()->routeIs($menu['route']) ? 'text-primary-light bg-primary' : 'text-slate-700 bg-slate-100' }} hover:text-primary-light hover:bg-primary duration-150  px-4 py-2 rounded-4xl block">
                                                {{ $menu['name'] }}
                                            </a>
                                        </li>
                                    @endforeach

                                    {{-- auth menu --}}
                                    <div class="flex sm:hidden flex-col gap-3">
                                        <a href="/login"
                                            class="rounded-4xl block bg-slate-100 text-slate-700 px-4 py-2 duration-150 hover:text-primary-light hover:bg-primary">Log
                                            in</a>
                                        <a href="/signup"
                                            class="rounded-4xl block px-4 py-2 bg-secondary duration-150 text-primary-light hover:bg-primary">Sign
                                            up free</a>
                                    </div>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@push('script')
    <script src="{{ asset('/assets/js/menuToggler.js') }}"></script>
@endpush

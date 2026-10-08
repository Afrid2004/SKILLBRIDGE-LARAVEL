<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SkillBridge')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-100 text-slate-800">

    <main class="min-h-screen">

        <div class="min-h-screen overflow-hidden grid grid-cols-1 lg:grid-cols-12">

            {{-- Left Branding --}}
            <section
                class="hidden lg:flex lg:col-span-6 bg-cover bg-center bg-no-repeat text-white px-8 xl:px-10 py-8 flex-col justify-between"
                style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('{{ asset('assets/images/authbg.webp') }}');">

                <div class="flex items-center gap-2.5">

                    <div class="w-35">
                        <a href="{{ route('home.index') }}">
                            <img class="w-full" src="{{ asset('/assets/images/skillbridgewhite.png') }}"
                                alt="skillbridge">
                        </a>
                    </div>

                </div>

                <div class="max-w-lg">

                    <h1 class="text-3xl xl:text-5xl font-bold leading-tight tracking-tight">
                        Hire trusted talent
                        <br>
                        across Bangladesh.
                    </h1>

                    <p class="mt-3 text-xs xl:text-sm leading-5 text-slate-100">
                        12,400+ tasks completed
                        <span class="mx-1">•</span>
                        BDT 2.8Cr paid to freelancers
                        <span class="mx-1">•</span>
                        bKash & Nagad payouts
                    </p>

                    <div class="grid grid-cols-2 gap-3 mt-6">

                        <div
                            class="rounded-2xl bg-white/10 backdrop-blur-xl border border-white/10 shadow-lg px-5 py-4">
                            <p class="text-2xl font-bold mb-2 text-white">4.8/5</p>
                            <p class="text-sm text-white/70">avg. client rating</p>
                        </div>

                        <div
                            class="rounded-2xl bg-white/10 backdrop-blur-xl border border-white/10 shadow-lg px-5 py-4">
                            <p class="text-2xl font-bold mb-2 text-white">BDT 120+</p>
                            <p class="text-sm text-white/70">avg. starting price</p>
                        </div>

                    </div>

                </div>

                <p class="text-sm text-slate-300">
                    © {{ date('Y') }} SkillBridge Ltd, Merul Badda, Dhaka
                </p>

            </section>

            {{-- Content --}}
            <section
                class="lg:col-span-6 min-h-screen lg:min-h-0 flex items-center justify-center px-4 py-8 sm:px-6 lg:px-10 xl:px-16">
                @yield('content')
            </section>

        </div>

    </main>

    @stack('script')

</body>

</html>

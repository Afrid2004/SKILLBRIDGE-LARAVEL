@extends('layouts.frontend.app')

@section('content')
    <section class="bg-secondary text-primary-light">
        <div class="container">
            <div class="flex flex-col lg:flex-row items-center gap-10 py-12 lg:py-16 xl:py-20">

                <div class="w-full lg:w-1/2">
                    <div>
                        <div class="mb-5">
                            <span
                                class="inline-flex items-center gap-2 rounded-full border border-primary-light/15 bg-primary-light/10 px-3 py-1.5 text-xs font-medium text-primary-light/90">
                                <span class="h-1.5 w-1.5 rounded-full bg-green-400"></span>
                                12,400+ tasks completed across Bangladesh
                            </span>
                        </div>

                        <h1
                            class="max-w-2xl text-4xl font-bold leading-[1.1] tracking-tight sm:text-5xl lg:text-5xl xl:text-6xl">
                            Hire trusted freelancers
                            <span class="text-primary">for any small task.</span>
                        </h1>

                        <p class="mt-5 max-w-xl text-sm leading-6 text-primary-light/65 sm:text-base">
                            From logo design in Mirpur to full POS systems in Gulshan —
                            post a task, get proposals in hours, and pay securely in BDT.
                        </p>

                        {{-- Search --}}
                        <form class="mt-7 max-w-2xl">
                            <div
                                class="flex items-center gap-2 rounded-2xl bg-primary-light p-1.5 shadow-lg shadow-black/10">

                                <div class="flex min-w-0 flex-1 items-center gap-2 px-2">
                                    <i class="bi bi-search shrink-0 text-base text-slate-500"></i>

                                    <input type="text" name="search"
                                        class="min-w-0 flex-1 bg-transparent py-2.5 text-sm text-slate-800 outline-none placeholder:text-slate-400"
                                        placeholder='Try "food delivery app UI" or "CV writing"...'>
                                </div>

                                <button type="submit"
                                    class="shrink-0 rounded-xl bg-primary px-5 py-2.5 text-sm font-medium text-primary-light transition hover:bg-primary-dark active:scale-[0.98]">
                                    Search Tasks
                                </button>

                            </div>
                        </form>

                        {{-- Popular --}}
                        <div class="mt-4 flex flex-wrap items-center gap-2">

                            <a href="#"
                                class="rounded-full border border-primary-light/10 bg-primary-light/5 px-3 py-1 text-[11px] font-medium text-primary-light/75 transition hover:bg-primary-light/10 hover:text-primary-light">
                                Logo Design BDT 2k
                            </a>

                            <a href="#"
                                class="rounded-full border border-primary-light/10 bg-primary-light/5 px-3 py-1 text-[11px] font-medium text-primary-light/75 transition hover:bg-primary-light/10 hover:text-primary-light">
                                WordPress Fix
                            </a>

                            <a href="#"
                                class="rounded-full border border-primary-light/10 bg-primary-light/5 px-3 py-1 text-[11px] font-medium text-primary-light/75 transition hover:bg-primary-light/10 hover:text-primary-light">
                                Data Entry
                            </a>

                            <a href="#"
                                class="rounded-full border border-primary-light/10 bg-primary-light/5 px-3 py-1 text-[11px] font-medium text-primary-light/75 transition hover:bg-primary-light/10 hover:text-primary-light">
                                Facebook Ads
                            </a>
                        </div>

                        {{-- Stats --}}
                        <div class="mt-8 grid  grid-cols-3 border-t border-primary-light/10 pt-6">

                            <div class="pr-1 sm:pr-4">
                                <h3 class="text-xl font-semibold text-primary-light sm:text-3xl">
                                    BDT 4.2Cr+
                                </h3>
                                <p class="mt-1 text-[11px] text-primary-light/50 sm:text-xs">
                                    Paid to freelancers
                                </p>
                            </div>

                            <div class="border-l border-primary-light/10 px-2 sm:px-4">
                                <h3 class="text-xl font-semibold text-primary-light sm:text-3xl">
                                    18,500+
                                </h3>
                                <p class="mt-1 text-[11px] text-primary-light/50 sm:text-xs">
                                    Verified freelancers
                                </p>
                            </div>

                            <div class="border-l border-primary-light/10 pl-2 sm:pl-4">
                                <div class="flex items-center gap-1">
                                    <h3 class="text-xl font-semibold text-primary-light sm:text-3xl">
                                        4.8
                                    </h3>

                                    <i class="bi bi-star-fill text-sm text-yellow-500"></i>
                                </div>

                                <p class="mt-1 text-[11px] text-primary-light/50 sm:text-xs">
                                    Average rating
                                </p>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="w-full lg:w-1/2">

                    {{-- Main Image --}}
                    <div class="relative lg:ml-auto w-full lg:max-w-xl">

                        <div class="overflow-hidden rounded-2xl border border-primary-light/10 bg-primary-light/5">
                            <img src="{{ asset('assets/images/hero-freelancer.webp') }}"
                                alt="SkillBridge freelancer working" class="aspect-[4/3] w-full object-cover">
                        </div>


                        {{-- Live Tasks Card --}}
                        <div
                            class="absolute right-px top-px flex items-center gap-3 rounded-2xl rounded-tl-none rounded-br-none bg-primary-light px-4 py-3 text-slate-800 shadow-black/20">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-primary/10">
                                <i class="bi bi-briefcase text-primary"></i>
                            </div>

                            <div>
                                <p class="text-xs font-semibold">
                                    320 tasks live now
                                </p>

                                <p class="mt-0.5 text-[10px] font-medium text-green-600">
                                    +48 today in Dhaka
                                </p>
                            </div>
                        </div>


                        {{-- Payment Card --}}
                        <div
                            class="absolute bottom-px left-px flex items-center gap-3 rounded-2xl bg-primary-light px-4 py-3 text-slate-800 shadow-xl shadow-black/20 rounded-tl-none rounded-br-none">
                            <div
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-green-50 border border-green-100">
                                <i class="bi bi-check2 text-lg text-green-500"></i>
                            </div>

                            <div>
                                <p class="text-xs font-semibold">
                                    Payment released BDT 15,000
                                </p>

                                <p class="mt-0.5 text-[10px] text-slate-500">
                                    Logo + brand guide · Approved
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection

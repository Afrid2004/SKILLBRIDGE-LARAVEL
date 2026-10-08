@extends('layouts.frontend.app')

@section('title', 'Design a logo & brand kit for Dhaka food startup - SkillBridge')
@section('meta_description', 'View task details, requirements, budget and client information on SkillBridge.')

@section('content')

    <section class="bg-slate-50 py-15">
        <div class="container">

            <!-- Main Layout -->
            <div class="grid grid-cols-12 gap-7">

                <!-- Main Task Content -->
                <div class="col-span-8">

                    <div class="bg-primary-light border border-slate-200 rounded-2xl p-4 md:p-6">

                        <!-- Breadcrumb -->
                        <div class="flex flex-wrap items-center gap-1.5 text-[11px] md:text-xs text-slate-500 mb-3">
                            <a href="#" class="hover:text-primary duration-150">
                                Home
                            </a>

                            <span>/</span>

                            <a href="#" class="hover:text-primary duration-150">
                                Design
                            </a>

                            <span>/</span>

                            <span class="text-slate-700">
                                Logo & brand kit
                            </span>
                        </div>

                        <!-- Task Title -->
                        <h1 class="text-2xl md:text-3xl font-semibold leading-tight text-slate-900">
                            Design a logo & brand kit for Dhaka food startup
                        </h1>

                        <!-- Task Meta -->
                        <div class="flex flex-wrap items-center gap-x-3 gap-y-2 mt-3 text-[11px] md:text-xs text-slate-500">

                            <span class="px-2 py-1 rounded-full bg-blue-50 text-primary font-medium">
                                Open
                            </span>

                            <span class="flex items-center gap-1">
                                <i class="bi bi-clock"></i>
                                Posted 2 hours ago
                            </span>

                            <span class="hidden sm:inline">
                                •
                            </span>

                            <span>
                                Ends in 3 days
                            </span>

                            <span class="hidden sm:inline">
                                •
                            </span>

                            <span class="flex items-center gap-1">
                                <i class="bi bi-eye"></i>
                                214 views
                            </span>

                            <span class="hidden sm:inline">
                                •
                            </span>

                            <span class="flex items-center gap-1">
                                <i class="bi bi-people"></i>
                                14 proposals
                            </span>

                        </div>

                        <!-- Description -->
                        <div class="mt-6">

                            <p class="text-sm leading-6 text-slate-600">
                                We are launching "Dhaka Bites", a cloud kitchen in Dhanmondi.
                                Need a complete brand kit: primary logo + Bangla version,
                                menu card (A3), Facebook cover + 5 post templates, packaging
                                sticker. Style: modern, appetizing, red/orange palette.
                                Source files (AI/Figma) required. One revision round included.
                            </p>

                        </div>

                        <!-- Required Skills -->
                        <div class="mt-6">

                            <h2 class="text-sm font-semibold text-slate-900 mb-3">
                                Required skills
                            </h2>

                            <div class="flex flex-wrap gap-2">

                                <span
                                    class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                    Logo Design
                                </span>

                                <span
                                    class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                    Branding
                                </span>

                                <span
                                    class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                    Illustrator
                                </span>

                                <span
                                    class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                    Figma
                                </span>

                            </div>

                        </div>

                        <!-- Attachments -->
                        <div class="mt-6">

                            <h2 class="text-sm font-semibold text-slate-900 mb-3">
                                Attachments <span class="text-slate-400">(3)</span>
                            </h2>

                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-2.5">

                                <!-- Attachment 01 -->
                                <a href="#"
                                    class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 bg-white hover:border-primary/30 hover:bg-blue-50/30 duration-150">

                                    <div
                                        class="w-9 h-9 shrink-0 rounded-lg bg-blue-50 text-primary flex items-center justify-center">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>

                                    <div class="min-w-0">
                                        <p class="text-xs font-medium text-slate-700 truncate">
                                            brief.pdf
                                        </p>

                                        <p class="text-[11px] text-slate-400 mt-0.5">
                                            2.1 MB
                                        </p>
                                    </div>

                                </a>

                                <!-- Attachment 02 -->
                                <a href="#"
                                    class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 bg-white hover:border-primary/30 hover:bg-blue-50/30 duration-150">

                                    <div
                                        class="w-9 h-9 shrink-0 rounded-lg bg-blue-50 text-primary flex items-center justify-center">
                                        <i class="bi bi-image"></i>
                                    </div>

                                    <div class="min-w-0">
                                        <p class="text-xs font-medium text-slate-700 truncate">
                                            sample-menu.jpg
                                        </p>

                                        <p class="text-[11px] text-slate-400 mt-0.5">
                                            840 KB
                                        </p>
                                    </div>

                                </a>

                                <!-- Attachment 03 -->
                                <a href="#"
                                    class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 bg-white hover:border-primary/30 hover:bg-blue-50/30 duration-150">

                                    <div
                                        class="w-9 h-9 shrink-0 rounded-lg bg-blue-50 text-primary flex items-center justify-center">
                                        <i class="bi bi-file-earmark-zip"></i>
                                    </div>

                                    <div class="min-w-0">
                                        <p class="text-xs font-medium text-slate-700 truncate">
                                            brand-refs.zip
                                        </p>

                                        <p class="text-[11px] text-slate-400 mt-0.5">
                                            12 MB
                                        </p>
                                    </div>

                                </a>

                            </div>

                        </div>

                        <!-- About Client -->
                        <div class="mt-6">

                            <h2 class="text-sm font-semibold text-slate-900 mb-3">
                                About the client
                            </h2>

                            <div
                                class="border border-slate-200 rounded-xl p-3 bg-white flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                                <div class="flex items-center gap-3 min-w-0">

                                    <div
                                        class="w-10 h-10 shrink-0 rounded-full overflow-hidden bg-slate-100 border border-slate-200">
                                        <img src="{{ asset('/assets/images/client.webp') }}" alt="Client"
                                            class="w-full h-full object-cover">
                                    </div>

                                    <div class="min-w-0">

                                        <div class="flex items-center gap-1.5">

                                            <h3 class="text-sm font-semibold text-slate-800 truncate">
                                                Tanvir Hasan
                                            </h3>

                                            <i class="bi bi-patch-check-fill text-primary text-xs"></i>

                                        </div>

                                        <p class="text-[11px] text-slate-500 mt-0.5">
                                            Dhanmondi, Dhaka
                                            <span class="mx-1">•</span>
                                            18 tasks posted
                                            <span class="mx-1">•</span>
                                            94% hire rate
                                        </p>

                                    </div>

                                </div>

                                <div class="flex items-center gap-1.5 shrink-0">

                                    <i class="bi bi-star-fill text-amber-500 text-xs"></i>

                                    <span class="text-xs font-semibold text-slate-700">
                                        4.8
                                    </span>

                                    <span class="text-[11px] text-slate-400">
                                        (32)
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Sidebar -->
                <aside class="col-span-4">

                    <div class="lg:sticky lg:top-5 space-y-5">

                        <!-- Budget & Action -->
                        <div class="bg-primary-light border border-slate-200 rounded-2xl p-4">

                            <div>

                                <p class="text-[11px] text-slate-500">
                                    Budget (fixed price)
                                </p>

                                <p class="text-2xl md:text-3xl font-semibold text-slate-900 leading-none mt-1">
                                    BDT 8,500
                                </p>

                                <p class="text-[11px] text-slate-500 mt-1">
                                    Intermediate
                                    <span class="mx-1">•</span>
                                    Est. 5–7 days
                                </p>

                            </div>

                            <!-- Submit Proposal -->
                            <a href="#"
                                class="mt-4 w-full h-11 rounded-xl bg-primary text-primary-light flex items-center justify-center text-xs font-semibold hover:bg-primary-dark duration-150">
                                Submit a proposal
                            </a>

                            <!-- Save -->
                            <button type="button"
                                class="mt-4 w-full h-9 rounded-xl border border-slate-200 bg-white text-slate-700 flex items-center justify-center gap-2 text-xs font-medium hover:border-primary hover:text-primary duration-150">
                                <i class="bi bi-heart"></i>
                                Save task
                            </button>

                            <p class="text-[10px] text-slate-500 text-center mt-3">
                                14 proposals already
                                <span class="mx-1">•</span>
                                16 connects left
                            </p>

                        </div>

                        <!-- Task Facts -->
                        <div class="bg-primary-light border border-slate-200 rounded-2xl p-4">

                            <h2 class="text-sm font-semibold text-slate-900 mb-4">
                                Task facts
                            </h2>

                            <div class="divide-y divide-slate-200">

                                <!-- Deadline -->
                                <div class="flex items-center justify-between gap-4 py-3 first:pt-0">

                                    <span class="text-xs text-slate-500">
                                        Deadline
                                    </span>

                                    <span class="text-xs text-slate-700 font-medium text-right">
                                        12 Oct 2026
                                    </span>

                                </div>

                                <!-- Location -->
                                <div class="flex items-center justify-between gap-4 py-3">

                                    <span class="text-xs text-slate-500">
                                        Location
                                    </span>

                                    <span class="text-xs text-slate-700 font-medium text-right">
                                        Remote / Dhaka
                                    </span>

                                </div>

                                <!-- Payment -->
                                <div class="flex items-center justify-between gap-4 py-3">

                                    <span class="text-xs text-slate-500">
                                        Payment
                                    </span>

                                    <span class="text-xs text-slate-700 font-medium text-right">
                                        Escrow via bKash
                                    </span>

                                </div>

                                <!-- Fee -->
                                <div class="flex items-center justify-between gap-4 pt-3">

                                    <span class="text-xs text-slate-500">
                                        Fee
                                    </span>

                                    <span class="text-xs text-slate-700 font-medium text-right">
                                        10% (paid by client)
                                    </span>

                                </div>

                            </div>

                        </div>

                        <!-- Safety Tip -->
                        <div class="rounded-2xl bg-amber-100 border border-amber-200 p-4">

                            <div class="flex items-start gap-2.5">

                                <i class="bi bi-shield-check text-amber-700 text-sm mt-0.5 shrink-0"></i>

                                <p class="text-[11px] leading-5 text-amber-900">
                                    <span class="font-semibold">
                                        Safety tip:
                                    </span>
                                    never pay outside SkillBridge.
                                    All payments are escrow-protected.
                                </p>

                            </div>

                        </div>

                    </div>

                </aside>

            </div>

        </div>
    </section>

@endsection

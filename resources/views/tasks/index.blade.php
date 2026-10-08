@extends('layouts.frontend.app')

@section('title', 'Browse Tasks - SkillBridge')
@section('meta_description', 'Browse and find small freelance tasks from clients across Bangladesh.')

@section('content')

    <section class="bg-slate-50 min-h-screen py-8 md:py-10 lg:py-12">
        <div class="container">

            <!-- Page Header -->
            <div class="mb-6 md:mb-8">
                <h1 class="text-2xl md:text-3xl font-semibold text-slate-900">
                    Browse tasks
                </h1>

                <p class="mt-1.5 text-sm text-slate-500">
                    3,412 open tasks across Bangladesh
                    <span class="mx-1">•</span>
                    budgets in BDT
                </p>
            </div>

            <!-- Search Area -->
            <div class="bg-primary-light border border-slate-200 rounded-2xl p-2.5 md:p-3 mb-6 md:mb-7">

                <form class="grid grid-cols-1 md:grid-cols-[1fr_190px_auto] gap-2">

                    <!-- Search Input -->
                    <div class="relative">
                        <i class="bi bi-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-500 text-sm">
                        </i>

                        <input type="text" placeholder="Search by keyword, skill or location..."
                            class="w-full h-11 md:h-12 rounded-xl border border-slate-200 bg-white pl-10 pr-4 text-sm text-slate-700 placeholder:text-slate-400 outline-none focus:border-primary focus:ring-2 focus:ring-primary/10">
                    </div>

                    <!-- Category -->
                    <div class="relative">
                        <select
                            class="appearance-none w-full h-11 md:h-12 rounded-xl border border-slate-200 bg-white px-4 pr-10 text-sm text-slate-700 outline-none focus:border-primary focus:ring-2 focus:ring-primary/10">
                            <option>All categories</option>
                            <option>Design</option>
                            <option>Development</option>
                            <option>Writing</option>
                            <option>Marketing</option>
                            <option>Data Entry</option>
                            <option>Video & Animation</option>
                        </select>

                        <i
                            class="bi bi-chevron-down absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none text-slate-700 text-xs">
                        </i>
                    </div>

                    <!-- Search Button -->
                    <button type="submit"
                        class="h-11 md:h-12 px-6 rounded-xl bg-primary text-primary-light text-sm font-semibold hover:bg-primary-dark duration-150">
                        Search
                    </button>

                </form>
            </div>

            <!-- Mobile Filter Button -->
            <div class="lg:hidden mb-5">
                <button type="button"
                    class="filterOpen w-full h-11 rounded-xl border border-slate-200 bg-primary-light text-slate-700 text-sm font-medium flex items-center justify-center gap-2 hover:border-primary hover:text-primary duration-150">
                    <i class="bi bi-funnel"></i>
                    Filters
                </button>
            </div>

            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-[270px_1fr] gap-5 lg:gap-6">

                <!-- Desktop Filter Sidebar -->
                <aside class="hidden lg:block">
                    <div class="bg-primary-light border border-slate-200 rounded-2xl p-5">

                        <!-- Filter Header -->
                        <div class="flex items-center justify-between mb-5">
                            <h2 class="font-semibold text-sm text-slate-900">
                                Filters
                            </h2>

                            <button type="button" class="text-xs text-primary hover:text-primary-dark font-medium">
                                Clear all
                            </button>
                        </div>

                        <!-- Budget -->
                        <div class="mb-6">
                            <h3 class="text-xs font-semibold text-slate-900 mb-3">
                                Budget (BDT)
                            </h3>

                            <div class="space-y-3">

                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="radio" name="budget" class="w-4 h-4 accent-primary">
                                    <span class="text-sm text-slate-600">
                                        Under BDT 1,000
                                    </span>
                                </label>

                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="radio" name="budget" checked class="w-4 h-4 accent-primary">
                                    <span class="text-sm text-slate-600">
                                        BDT 1,000 – BDT 5,000
                                    </span>
                                </label>

                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="radio" name="budget" class="w-4 h-4 accent-primary">
                                    <span class="text-sm text-slate-600">
                                        BDT 5,000 – BDT 15,000
                                    </span>
                                </label>

                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="radio" name="budget" class="w-4 h-4 accent-primary">
                                    <span class="text-sm text-slate-600">
                                        BDT 15,000+
                                    </span>
                                </label>

                            </div>
                        </div>

                        <!-- Category -->
                        <div class="mb-6">
                            <h3 class="text-xs font-semibold text-slate-900 mb-3">
                                Category
                            </h3>

                            <div class="space-y-3">

                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" class="w-4 h-4 accent-primary">
                                    <span class="text-sm text-slate-600">
                                        Design <span class="text-slate-400">(2,140)</span>
                                    </span>
                                </label>

                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" class="w-4 h-4 accent-primary">
                                    <span class="text-sm text-slate-600">
                                        Development <span class="text-slate-400">(1,860)</span>
                                    </span>
                                </label>

                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" class="w-4 h-4 accent-primary">
                                    <span class="text-sm text-slate-600">
                                        Writing <span class="text-slate-400">(1,240)</span>
                                    </span>
                                </label>

                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" class="w-4 h-4 accent-primary">
                                    <span class="text-sm text-slate-600">
                                        Marketing <span class="text-slate-400">(980)</span>
                                    </span>
                                </label>

                            </div>
                        </div>

                        <!-- Location -->
                        <div>
                            <h3 class="text-xs font-semibold text-slate-900 mb-3">
                                Location
                            </h3>

                            <div class="relative">
                                <select
                                    class="appearance-none w-full h-10 rounded-xl border border-slate-200 bg-white px-3 pr-9 text-sm text-slate-700 outline-none focus:border-primary">
                                    <option>Anywhere in BD</option>
                                    <option>Dhaka</option>
                                    <option>Chattogram</option>
                                    <option>Sylhet</option>
                                    <option>Rajshahi</option>
                                    <option>Khulna</option>
                                    <option>Remote</option>
                                </select>

                                <i
                                    class="bi bi-chevron-down absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-xs text-slate-600">
                                </i>
                            </div>
                        </div>

                    </div>
                </aside>

                <!-- Task Results -->
                <div class="min-w-0">

                    <!-- Results Header -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-4">

                        <p class="text-sm text-slate-500">
                            Showing <span class="font-medium text-slate-700">1–8</span>
                            of <span class="font-medium text-slate-700">3,412</span>
                        </p>

                        <div class="relative w-full sm:w-auto">
                            <select
                                class="appearance-none w-full sm:w-auto min-w-[155px] h-10 rounded-xl border border-slate-200 bg-primary-light px-3 pr-9 text-sm text-slate-700 outline-none focus:border-primary">
                                <option>Newest first</option>
                                <option>Oldest first</option>
                                <option>Budget: High to Low</option>
                                <option>Budget: Low to High</option>
                                <option>Most proposals</option>
                            </select>

                            <i
                                class="bi bi-chevron-down absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-xs text-slate-600">
                            </i>
                        </div>

                    </div>

                    <!-- Task Cards -->
                    <div class="space-y-4">

                        <!-- Task 01 -->
                        <article
                            class="bg-primary-light border border-slate-200 rounded-2xl p-4 md:p-5 hover:border-blue-200 hover:shadow-md hover:shadow-slate-200/50 duration-200">

                            <div class="flex flex-col">

                                <div class="flex items-start justify-between gap-3">

                                    <div class="min-w-0">
                                        <h2 class="text-base md:text-lg font-semibold text-slate-900 leading-6">
                                            Design a logo & brand kit for Dhaka food startup
                                        </h2>

                                        <div class="flex items-center gap-1.5 mt-2 text-xs text-slate-500">
                                            <i class="bi bi-geo-alt"></i>
                                            <span>Rahim Traders</span>
                                            <span>•</span>
                                            <span>Dhaka</span>
                                        </div>
                                    </div>

                                    <span
                                        class="shrink-0 px-2.5 py-1 rounded-full bg-blue-50 text-primary text-[11px] font-medium">
                                        Open
                                    </span>

                                </div>

                                <p class="mt-3 text-sm text-slate-600 leading-6 max-w-4xl">
                                    Need a modern logo, menu design and Facebook cover.
                                    Must deliver source files and support one revision round...
                                </p>

                                <div class="flex flex-wrap gap-2 mt-3">

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

                                </div>

                                <div
                                    class="border-t border-slate-200 mt-4 pt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">

                                        <span class="font-semibold text-slate-900 text-sm md:text-base">
                                            BDT 8,500
                                        </span>

                                        <span class="flex items-center gap-1.5 text-xs text-slate-500">
                                            <i class="bi bi-people"></i>
                                            14 proposals
                                        </span>

                                        <span class="flex items-center gap-1.5 text-xs text-red-500">
                                            <i class="bi bi-clock"></i>
                                            3 days left
                                        </span>

                                    </div>

                                    <a href="#"
                                        class="w-full sm:w-auto text-center px-4 py-2.5 rounded-xl bg-primary text-primary-light text-xs font-semibold hover:bg-primary-dark duration-150">
                                        View task
                                    </a>

                                </div>

                            </div>
                        </article>

                        <!-- Task 02 -->
                        <article
                            class="bg-primary-light border border-slate-200 rounded-2xl p-4 md:p-5 hover:border-blue-200 hover:shadow-md hover:shadow-slate-200/50 duration-200">

                            <div class="flex flex-col">

                                <div class="flex items-start justify-between gap-3">

                                    <div class="min-w-0">
                                        <h2 class="text-base md:text-lg font-semibold text-slate-900 leading-6">
                                            Urgent: Translate 20-page company profile (English → Bangla)
                                        </h2>

                                        <div class="flex items-center gap-1.5 mt-2 text-xs text-slate-500">
                                            <i class="bi bi-geo-alt"></i>
                                            <span>Padma Group</span>
                                            <span>•</span>
                                            <span>Motijheel, Dhaka</span>
                                        </div>
                                    </div>

                                    <span
                                        class="shrink-0 px-2.5 py-1 rounded-full bg-blue-50 text-primary text-[11px] font-medium">
                                        Open
                                    </span>

                                </div>

                                <p class="mt-3 text-sm text-slate-600 leading-6 max-w-4xl">
                                    Need a professional Bangla translation of a 20-page
                                    company profile with accurate formatting and proofreading...
                                </p>

                                <div class="flex flex-wrap gap-2 mt-3">

                                    <span
                                        class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                        Translation
                                    </span>

                                    <span
                                        class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                        Bangla
                                    </span>

                                    <span
                                        class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                        Proofreading
                                    </span>

                                </div>

                                <div
                                    class="border-t border-slate-200 mt-4 pt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">

                                        <span class="font-semibold text-slate-900 text-sm md:text-base">
                                            BDT 4,200
                                        </span>

                                        <span class="flex items-center gap-1.5 text-xs text-slate-500">
                                            <i class="bi bi-people"></i>
                                            31 proposals
                                        </span>

                                        <span class="flex items-center gap-1.5 text-xs text-red-500">
                                            <i class="bi bi-clock"></i>
                                            1 day left
                                        </span>

                                    </div>

                                    <a href="#"
                                        class="w-full sm:w-auto text-center px-4 py-2.5 rounded-xl bg-primary text-primary-light text-xs font-semibold hover:bg-primary-dark duration-150">
                                        View task
                                    </a>

                                </div>

                            </div>
                        </article>

                        <!-- Task 03 -->
                        <article
                            class="bg-primary-light border border-slate-200 rounded-2xl p-4 md:p-5 hover:border-blue-200 hover:shadow-md hover:shadow-slate-200/50 duration-200">

                            <div class="flex flex-col">

                                <div class="flex items-start justify-between gap-3">

                                    <div class="min-w-0">
                                        <h2 class="text-base md:text-lg font-semibold text-slate-900 leading-6">
                                            Facebook ads setup + 10 creatives for Eid campaign
                                        </h2>

                                        <div class="flex items-center gap-1.5 mt-2 text-xs text-slate-500">
                                            <i class="bi bi-geo-alt"></i>
                                            <span>StyleMart</span>
                                            <span>•</span>
                                            <span>Uttara, Dhaka</span>
                                        </div>
                                    </div>

                                    <span
                                        class="shrink-0 px-2.5 py-1 rounded-full bg-blue-50 text-primary text-[11px] font-medium">
                                        Open
                                    </span>

                                </div>

                                <p class="mt-3 text-sm text-slate-600 leading-6 max-w-4xl">
                                    Looking for a Facebook ads expert to set up campaigns
                                    and create engaging visuals for an upcoming Eid promotion...
                                </p>

                                <div class="flex flex-wrap gap-2 mt-3">

                                    <span
                                        class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                        Facebook Ads
                                    </span>

                                    <span
                                        class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                        Meta Ads
                                    </span>

                                    <span
                                        class="px-2.5 py-1 rounded-md bg-slate-50 border border-slate-200 text-xs text-slate-600">
                                        Canva
                                    </span>

                                </div>

                                <div
                                    class="border-t border-slate-200 mt-4 pt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">

                                        <span class="font-semibold text-slate-900 text-sm md:text-base">
                                            BDT 6,500
                                        </span>

                                        <span class="flex items-center gap-1.5 text-xs text-slate-500">
                                            <i class="bi bi-people"></i>
                                            18 proposals
                                        </span>

                                        <span class="flex items-center gap-1.5 text-xs text-red-500">
                                            <i class="bi bi-clock"></i>
                                            2 days left
                                        </span>

                                    </div>

                                    <a href="#"
                                        class="w-full sm:w-auto text-center px-4 py-2.5 rounded-xl bg-primary text-primary-light text-xs font-semibold hover:bg-primary-dark duration-150">
                                        View task
                                    </a>

                                </div>

                            </div>
                        </article>

                    </div>

                    <!-- Pagination -->
                    <div class="flex items-center justify-center gap-2 mt-7">

                        <a href="#"
                            class="w-9 h-9 rounded-lg border border-slate-200 bg-primary-light flex items-center justify-center text-slate-400">
                            <i class="bi bi-chevron-left text-xs"></i>
                        </a>

                        <a href="#"
                            class="w-9 h-9 rounded-lg bg-primary text-primary-light flex items-center justify-center text-sm font-medium">
                            1
                        </a>

                        <a href="#"
                            class="w-9 h-9 rounded-lg border border-slate-200 bg-primary-light flex items-center justify-center text-sm text-slate-600 hover:border-primary hover:text-primary duration-150">
                            2
                        </a>

                        <a href="#"
                            class="w-9 h-9 rounded-lg border border-slate-200 bg-primary-light flex items-center justify-center text-sm text-slate-600 hover:border-primary hover:text-primary duration-150">
                            3
                        </a>

                        <span class="px-1 text-slate-400">...</span>

                        <a href="#"
                            class="w-9 h-9 rounded-lg border border-slate-200 bg-primary-light flex items-center justify-center text-sm text-slate-600 hover:border-primary hover:text-primary duration-150">
                            12
                        </a>

                        <a href="#"
                            class="w-9 h-9 rounded-lg border border-slate-200 bg-primary-light flex items-center justify-center text-slate-600 hover:border-primary hover:text-primary duration-150">
                            <i class="bi bi-chevron-right text-xs"></i>
                        </a>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Mobile Filter Drawer -->
    <div
        class="filterModal group fixed inset-0 z-50 flex justify-end bg-secondary/50 opacity-0 pointer-events-none transition-all duration-200 [&.active]:opacity-100 [&.active]:pointer-events-auto">

        <div
            class="filterDrawer w-full max-w-sm h-full bg-primary-light translate-x-full transition-transform duration-300 group-[.active]:translate-x-0 overflow-y-auto">

            <div class="flex items-center justify-between p-4 border-b border-slate-200">

                <h2 class="font-semibold text-slate-900">
                    Filters
                </h2>

                <button type="button"
                    class="filterClose w-9 h-9 rounded-full bg-secondary text-primary-light flex items-center justify-center hover:bg-primary duration-150">
                    <i class="bi bi-x-lg text-sm"></i>
                </button>

            </div>

            <div class="p-5">

                <!-- Mobile Budget -->
                <div class="mb-6">
                    <h3 class="text-xs font-semibold text-slate-900 mb-3">
                        Budget (BDT)
                    </h3>

                    <div class="space-y-3">

                        <label class="flex items-center gap-2.5">
                            <input type="radio" name="mobile_budget" class="w-4 h-4 accent-primary">
                            <span class="text-sm text-slate-600">Under BDT 1,000</span>
                        </label>

                        <label class="flex items-center gap-2.5">
                            <input type="radio" name="mobile_budget" checked class="w-4 h-4 accent-primary">
                            <span class="text-sm text-slate-600">BDT 1,000 – BDT 5,000</span>
                        </label>

                        <label class="flex items-center gap-2.5">
                            <input type="radio" name="mobile_budget" class="w-4 h-4 accent-primary">
                            <span class="text-sm text-slate-600">BDT 5,000 – BDT 15,000</span>
                        </label>

                        <label class="flex items-center gap-2.5">
                            <input type="radio" name="mobile_budget" class="w-4 h-4 accent-primary">
                            <span class="text-sm text-slate-600">BDT 15,000+</span>
                        </label>

                    </div>
                </div>

                <!-- Mobile Category -->
                <div class="mb-6">
                    <h3 class="text-xs font-semibold text-slate-900 mb-3">
                        Category
                    </h3>

                    <div class="space-y-3">

                        <label class="flex items-center gap-2.5">
                            <input type="checkbox" class="w-4 h-4 accent-primary">
                            <span class="text-sm text-slate-600">Design</span>
                        </label>

                        <label class="flex items-center gap-2.5">
                            <input type="checkbox" class="w-4 h-4 accent-primary">
                            <span class="text-sm text-slate-600">Development</span>
                        </label>

                        <label class="flex items-center gap-2.5">
                            <input type="checkbox" class="w-4 h-4 accent-primary">
                            <span class="text-sm text-slate-600">Writing</span>
                        </label>

                        <label class="flex items-center gap-2.5">
                            <input type="checkbox" class="w-4 h-4 accent-primary">
                            <span class="text-sm text-slate-600">Marketing</span>
                        </label>

                    </div>
                </div>

                <!-- Mobile Skills -->
                <div class="mb-6">
                    <h3 class="text-xs font-semibold text-slate-900 mb-3">
                        Skills
                    </h3>

                    <div class="flex flex-wrap gap-2">

                        <span class="px-2.5 py-1 rounded-md bg-blue-50 text-primary text-xs">
                            Figma
                        </span>

                        <span class="px-2.5 py-1 rounded-md bg-blue-50 text-primary text-xs">
                            WordPress
                        </span>

                        <span class="px-2.5 py-1 rounded-md bg-blue-50 text-primary text-xs">
                            SEO
                        </span>

                        <span class="px-2.5 py-1 rounded-md bg-blue-50 text-primary text-xs">
                            Video
                        </span>

                    </div>
                </div>

                <!-- Mobile Location -->
                <div>
                    <h3 class="text-xs font-semibold text-slate-900 mb-3">
                        Location
                    </h3>

                    <select
                        class="w-full h-11 rounded-xl border border-slate-200 bg-white px-3 text-sm text-slate-700 outline-none focus:border-primary">
                        <option>Anywhere in BD</option>
                        <option>Dhaka</option>
                        <option>Chattogram</option>
                        <option>Sylhet</option>
                        <option>Rajshahi</option>
                        <option>Khulna</option>
                        <option>Remote</option>
                    </select>
                </div>

                <button type="button"
                    class="filterClose mt-8 w-full h-11 rounded-xl bg-primary text-primary-light text-sm font-semibold hover:bg-primary-dark duration-150">
                    Apply Filters
                </button>

            </div>
        </div>
    </div>

@endsection

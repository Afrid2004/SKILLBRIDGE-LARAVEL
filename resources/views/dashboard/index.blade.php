@extends('layouts.backend.dashboard')

@section('title', 'Overview')
@section('page-title', 'Dashboard Overview')


@section('content')

    {{-- Welcome Section --}}
    <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
        <div>
            <h2 class="text-2xl font-semibold tracking-tight text-secondary">
                Welcome back, {{ Auth::user()->name }}!
            </h2>
            <p class="mt-1 text-sm text-slate-500">
                Manage your projects and find the right freelancers for your work.
            </p>
        </div>

        <div class="flex items-center gap-2 text-sm text-slate-500">
            <i class="bi bi-calendar3 text-primary"></i>
            {{ now()->format('l, d F Y') }}
        </div>
    </div>

    {{-- Statistics --}}
    <div class="mb-8 grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total Projects --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex items-center justify-between">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-primary">
                    <i class="bi bi-briefcase text-xl"></i>
                </div>
                <span class="text-xs font-medium text-primary">All Time</span>
            </div>
            <p class="mt-5 text-sm text-slate-500">Total Projects</p>
            <h3 class="mt-1 text-2xl font-semibold text-secondary">12</h3>
        </div>

        {{-- Active Projects --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-primary">
                <i class="bi bi-folder-check text-xl"></i>
            </div>
            <p class="mt-5 text-sm text-slate-500">Active Projects</p>
            <h3 class="mt-1 text-2xl font-semibold text-secondary">05</h3>
        </div>

        {{-- Pending Proposals --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-primary">
                <i class="bi bi-file-earmark-text text-xl"></i>
            </div>
            <p class="mt-5 text-sm text-slate-500">Pending Proposals</p>
            <h3 class="mt-1 text-2xl font-semibold text-secondary">08</h3>
        </div>

        {{-- Total Spent --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-primary">
                <i class="bi bi-wallet2 text-xl"></i>
            </div>
            <p class="mt-5 text-sm text-slate-500">Total Spent</p>
            <h3 class="mt-1 text-2xl font-semibold text-secondary">BDT 24,500</h3>
        </div>

    </div>

    {{-- Quick Actions --}}
    <div class="mb-8 rounded-2xl border border-slate-200 bg-white p-5 sm:p-6">
        <div class="mb-5">
            <h3 class="font-semibold text-secondary">Quick Actions</h3>
            <p class="mt-1 text-xs text-slate-500">Get started with your next project</p>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <a href="#"
                class="flex items-center gap-4 rounded-xl border border-slate-200 p-4 transition hover:border-primary hover:bg-blue-50">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-primary">
                    <i class="bi bi-plus-lg text-xl"></i>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-secondary">Post a Project</h4>
                    <p class="mt-1 text-xs text-slate-500">Find freelancers for your work</p>
                </div>
            </a>

            <a href="#"
                class="flex items-center gap-4 rounded-xl border border-slate-200 p-4 transition hover:border-primary hover:bg-blue-50">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-primary">
                    <i class="bi bi-search text-xl"></i>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-secondary">Find Freelancers</h4>
                    <p class="mt-1 text-xs text-slate-500">Explore talented professionals</p>
                </div>
            </a>
        </div>
    </div>

    {{-- Recent Projects --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white">

        {{-- Header --}}
        <div
            class="flex flex-col justify-between gap-3 border-b border-slate-100 px-5 py-5 sm:flex-row sm:items-center sm:px-6">
            <div>
                <h3 class="font-semibold text-secondary">Recent Projects</h3>
                <p class="mt-1 text-xs text-slate-500">Overview of your latest projects</p>
            </div>

            <a href="#"
                class="inline-flex items-center gap-2 text-sm font-medium text-primary transition hover:text-primary-dark">
                View All
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="w-full min-w-[700px] text-left text-sm">

                <thead class="bg-slate-50 text-xs uppercase tracking-wider text-slate-500">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Project</th>
                        <th class="px-6 py-4 font-semibold">Deadline</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold">Budget</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">

                    <tr class="transition hover:bg-slate-50">
                        <td class="px-6 py-5">
                            <p class="font-medium text-secondary">Business Website Development</p>
                            <p class="mt-1 text-xs text-slate-400">Web Development</p>
                        </td>
                        <td class="px-6 py-5 text-slate-500">15 Nov 2026</td>
                        <td class="px-6 py-5">
                            <span class="inline-flex rounded-full bg-blue-50 px-3 py-1 text-xs font-medium text-primary">In
                                Progress</span>
                        </td>
                        <td class="px-6 py-5 font-medium text-secondary">BDT 15,000</td>
                    </tr>

                    <tr class="transition hover:bg-slate-50">
                        <td class="px-6 py-5">
                            <p class="font-medium text-secondary">E-commerce UI/UX Design</p>
                            <p class="mt-1 text-xs text-slate-400">UI/UX Design</p>
                        </td>
                        <td class="px-6 py-5 text-slate-500">20 Nov 2026</td>
                        <td class="px-6 py-5">
                            <span
                                class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600">Pending</span>
                        </td>
                        <td class="px-6 py-5 font-medium text-secondary">BDT 8,000</td>
                    </tr>

                    <tr class="transition hover:bg-slate-50">
                        <td class="px-6 py-5">
                            <p class="font-medium text-secondary">WordPress Website Redesign</p>
                            <p class="mt-1 text-xs text-slate-400">WordPress Development</p>
                        </td>
                        <td class="px-6 py-5 text-slate-500">05 Nov 2026</td>
                        <td class="px-6 py-5">
                            <span
                                class="inline-flex rounded-full bg-blue-50 px-3 py-1 text-xs font-medium text-primary">Completed</span>
                        </td>
                        <td class="px-6 py-5 font-medium text-secondary">BDT 5,000</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

@endsection

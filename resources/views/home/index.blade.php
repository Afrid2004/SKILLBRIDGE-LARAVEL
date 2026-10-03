@extends('layouts.frontend.app')

@section('content')
    {{-- hero section --}}
    @include('components.frontend.home.hero')
    {{-- categories section --}}
    @include('components.frontend.home.categories')
    {{-- process section --}}
    @include('components.frontend.home.process')
    {{-- tasks section --}}
    @include('components.frontend.home.tasks')
    {{-- freelancers section --}}
    @include('components.frontend.home.freelancers')
    {{-- why section --}}
    @include('components.frontend.home.why')
    {{-- cta section --}}
    @include('components.frontend.home.cta')
@endsection

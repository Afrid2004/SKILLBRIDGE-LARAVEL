@extends('layouts.frontend.app')

@section('content')
    {{-- hero section --}}
    @include('components.frontend.home.hero')
    {{-- categories section --}}
    @include('components.frontend.home.categories')
    {{-- process section --}}
    @include('components.frontend.home.process')
@endsection

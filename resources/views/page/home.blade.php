@extends('layouts.main')
@section('content')
    @include('sections.banner')
    <div class="py-5">
        @include('sections.category', ['packages' => $catagory])

    </div>
    @include('sections.about')
    @include('sections.counter')

    {{-- @include('sections.tour', ['packages' => $packages]) --}}
    @include('sections.tour-grid', ['packages' => $packages])
    @include('sections.promotion')
    <div class="py-5">
        @include('sections.testimonial')

    </div>
@endsection

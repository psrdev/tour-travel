@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => $package['title'], 'pagination' => $package['title']])
    @include('sections.tour-detail', ['package' => $package]);
    @include('sections.related', ['relatedPackages' => $relatedPackages]);
@endsection
@push('meta')
    <title>{{ $package['title'] }}</title>
@endpush

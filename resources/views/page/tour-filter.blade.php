@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', [
        'title' => $packages[0]['destination']['name'],
        'pagination' => $packages[0]['destination']['name'],
    ])

    @include('sections.tour-grid', ['packages' => $packages])
@endsection
@push('meta')
    <title>{{ $packages[0]['destination']['name'] }}</title>
@endpush

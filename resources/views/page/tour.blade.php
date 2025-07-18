@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', [
        'title' => 'Tours',
        'pagination' => 'tours',
    ])

    @include('sections.tour-grid', ['packages' => $packages])
@endsection
@push('meta')
    <title>Tours | Brolion Tourism</title>
@endpush

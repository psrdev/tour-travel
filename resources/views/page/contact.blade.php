@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => 'Contact', 'pagination' => 'contact'])
    @include('sections.contact')
@endsection
@push('meta')
    <title>Contact us Brolion Tourism</title>
@endpush

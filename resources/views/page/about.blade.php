@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => 'About', 'pagination' => 'about'])
    @include('sections.about');
    <div class="py-4">
        @include('sections.promotion')
    </div>
@endsection

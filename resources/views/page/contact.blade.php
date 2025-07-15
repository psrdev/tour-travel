@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => 'Contact', 'pagination' => 'contact'])
    @include('sections.contact')
@endsection

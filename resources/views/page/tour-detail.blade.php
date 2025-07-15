@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => 'title', 'pagination' => 'pagination'])
    @include('sections.tour-detail');
    @include('sections.related');
@endsection

@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => 'Destination', 'pagination' => 'destination'])
    <div class="py-5">
        @include('sections.category', ['packages' => $packages])

    </div>
@endsection

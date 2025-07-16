@extends('layouts.main')
@section('content')
    @include('sections.inner-banner', ['title' => '404', 'pagination' => '404'])
    <!-- Start Page Not Found -->
    <section class="page_not_found section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 wow fadeIn text-center mx-auto">
                    <div class="pnf_img">
                        <img src="{{ asset('assets/img/404.jpg') }}" width="500" alt="404">
                    </div>

                    <div class="pnf_content">
                        <h2>Oops! Page Not Found</h2>
                        <p>We are sorry, but the page you are looking for does not exist. It might have been removed, had
                            its name changed, or is temporarily unavailable.</p>
                        <a href="{{ route('front.home') }}" class="yellow_btn align-self-center">
                            <span>Back to Home <i class="ph ph-arrow-right"></i></span>
                        </a>
                    </div>
                </div> <!-- End Col -->

            </div>
        </div>
    </section>
    <!-- End Page Not Found -->
@endsection

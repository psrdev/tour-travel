@extends('layouts.main')
@section('content')
    <!-- Start Page Not Found -->
    <section class="page_not_found section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 wow fadeIn text-center mx-auto">
                    <div class="pnf_img">
                        <img src="{{ asset('assets/img/thank-you.jpg') }}" width="500" alt="404">
                    </div>

                    <div class="pnf_content">
                        <h2>Thank You</h2>
                        <p>We’ve received your message and will get back to you as soon as possible.
                            In the meantime, feel free to explore more about our services or connect with us on social
                            media.</p>
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
@push('meta')
    <title>Thank You | Brolion Tourism</title>
@endpush

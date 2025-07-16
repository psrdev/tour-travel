        <!-- Start Tour Category -->
        <section class="travel_category pb100 wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-heading">
                            <span>Destinations</span>
                            <h2>Explore the Beautiful Places
                                <br>Around World
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 text-md-end text-start mb-md-0 mb-5 align-self-center">
                        <a href="{{ route('front.destination') }}" class="yellow_btn">
                            <span>Browse All</span>
                        </a>
                    </div>
                </div>

                <div class="row g-4">
                    @foreach ($packages as $package)
                        <div class="col-xl-3 col-md-6 col-12">
                            <a
                                href="{{ route('front.destination.filter', ['dest' => $package['destination']['slug']]) }}">
                                <div class="category_item text-center">
                                    <img src="{{ asset('assets/img/category/' . $package['destination']['image']) }}"
                                        alt="{{ $package['destination']['slug'] }}">
                                    <div class="tcat_content">
                                        <span>Travel To</span>
                                        <h4>{{ $package['destination']['name'] }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Col -->
                    @endforeach





                </div>
            </div>
        </section>
        <!-- End Tour Category -->

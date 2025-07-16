        <!-- Start Newsletter -->
        {{-- <section class="container newsl_nmargin">
            <div class="newsletter_area text-center section-padding"
                style="background-image: url(assets/img/bg/newsletter.jpg);">
                <div class="col-lg-6 col-md-11 col-sm-12 mx-auto position-relative z-1">
                    <div class="newsletter_content px-2">
                        <h2>Sign Up Your Newsletter</h2>
                        <form id="newsletter_form" action="#" method="POST">
                            <input type="email" placeholder="Enter Email Address">
                            <button type="submit" class="nebtn">
                                <span>Subscribe
                                    <i class="ph ph-paper-plane-tilt"></i>
                                </span>
                            </button>
                        </form>
                        <p>You agree to Tourin Terms and Conditions, Privacy Policy</p>
                    </div>
                </div>
                <img src="assets/img/icons/airplane.png" alt="img" class="news_plane z-1">
                <img src="assets/img/nesletter.png" alt="img" class="news_image z-1">
                <img src="assets/img/shapes/newsletter.svg" alt="img" class="news_shape">
            </div>
        </section> --}}
        <!-- End Newsletter -->
        <!-- Start Footer -->
        <footer class="tr_footer wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="footer_about mb-md-0 mb-5">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Brolion Logo">
                            <p>
                                Discover seamless travel experiences with Brolion Tourism. From visa assistance to
                                curated tour packages, we make your journey unforgettable.
                            </p>
                            <span>Connect with us</span>
                            <ul class="social_link">
                                <li>
                                    <a href="https://www.facebook.com/BrolionTours">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://x.com/BrolionTourism">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/broliontourism">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/@BrolionTourism">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Col -->
                    <div class="col-xl-9 col-md-8 col-sm-6">
                        <div class="row">
                            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="footer_widget">
                                    <h3 class="footer-title">About Tourin</h3>
                                    <ul>
                                        <li>
                                            <a href="#">Faq's</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="#">Term & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="#">Support</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            <!-- End Col -->
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="footer_widget">
                                    <h3 class="footer-title">Useful Links</h3>
                                    <ul>
                                        <li>
                                            <a href="{{ route('front.about') }}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.destination') }}">Destinations</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.privacy') }}">Privacy Policy</a>
                                        </li>


                                        <li>
                                            <a href="{{ route('front.contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <!-- End Col -->
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="footer_widget">
                                    <h3 class="footer-title">Quick Contact</h3>
                                    <div class="footer_contact">
                                        <p>
                                            <i class="ph ph-map-pin-area"></i>
                                            <span>198/A Tulsibadi Ayodhya
                                                <br>Uttar Pradesh, INDIA
                                            </span>
                                        </p>
                                        <p>
                                            <i class="ph ph-phone-call"></i>
                                            <span>
                                                <a href="tel:+919202106551">+91 9202106551</a>
                                            </span>
                                        </p>
                                        <p>
                                            <i class="ph ph-envelope-simple"></i>
                                            <span>
                                                <a href="mailto:info@broliontourism.com">info@broliontourism.com</a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Col -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tr_copyright text-center">
                            <p>Copyright © 2025
                                <a href="https://broliontourism.com">Brolion Tourism</a> All Right Reserved.
                            </p>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- Start progress-wrap -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- End progress-wrap -->

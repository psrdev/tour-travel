  <!-- Start Header -->
  <header id="tr_header" class="header_2">
      <div class="container-xxl container-fluid">
          <div class="row">
              <div class="col-xl-7 col-md-3 col-12 gap-3 d-lg-flex d-block text-md-start text-center align-self-center">
                  <div class="site_logo d-inline-block">
                      <a href="{{ route('front.home') }}"><img src="{{ asset('assets/img/logo.svg') }}"
                              alt="Brolion Tourism"></a>
                  </div>

                  <nav class="main-menu align-self-center">
                      <ul>
                          <li><a href="{{ route('front.home') }}">Home <i class="fa-solid "></i></a></li>
                          <li><a href="{{ route('front.about') }}">About</a></li>
                          <li><a href="{{ route('front.destination') }}">Destination</a></li>
                          <li><a href="{{ route('front.contact') }}">Contact</a></li>
                      </ul>
                  </nav>
              </div><!-- End Col -->

              <div class="col-xl-5 col-md-9 col-12">
                  <div class="header_right d-flex justify-content-lg-end justify-content-center">
                      {{-- <div class="call_us d-flex gap-3 align-self-center">
                          <i class="ph ph-headset align-self-center"></i>
                          <div class="call_content align-self-center">
                              <span>Call Anytime</span>
                              <a href="tel:+8801546857487">(86) - 1546 857</a>
                          </div>
                      </div> --}}

                      {{-- <div class="cart_search d-flex align-self-center">
                          <span class="hcart"><a href="cart.html"><i
                                      class="ph ph-shopping-cart-simple"></i></a><span>3</span></span>
                          <span class="hsearch"><a href="#"><i class="ph ph-magnifying-glass"></i></a></span>
                      </div> --}}

                      <button href="#" class="yellow_btn d-none d-md-block align-self-center"
                          data-bs-toggle="modal" data-bs-target="#bookingModal" data-product="Product A">Book
                          Now</button>

                      <div class="header__hamburger d-xl-none my-auto">
                          <div class="sidebar__toggle">
                              <i class="ph ph-list"></i>
                          </div>
                      </div>
                  </div>
              </div><!-- End Col -->
          </div>
      </div>
  </header>
  <!-- End Header -->

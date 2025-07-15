 <!-- Start Tour Packages -->
 <section class="tour_packages section-padding  fadeInUp">
     <div class="container">
         <div class="row">
             <div class="col-lg-7 col-md-8">
                 <div class="section-heading">
                     <span>Popular Tour</span>
                     <h2>Amazing Tour Places</h2>
                 </div>
             </div><!-- End Col -->

             <div class="col-lg-5 col-md-4 text-md-end text-start mb-md-0 mb-5 align-self-center">
                 <a href="#" class="yellow_btn"><span>Browse All</span></a>
             </div><!-- End Col -->


             <div class="col-12 position-relative">
                 <div class="packages_slider  wow fadeInUp">
                     <div class="swiper-wrapper">
                         @foreach ($packages as $pack)
                             @foreach ($pack['packages'] as $p)
                                 <div class="swiper-slide package_item">
                                     <div class="pack_image">
                                         <img src="{{ asset('assets/img/tour/' . $p['image']) }}" alt="img">
                                         <div class="pac_badge">
                                             Featured
                                         </div>
                                     </div>

                                     <div class="pack_content">
                                         <span class="pack_rating"><i class="fa-solid fa-star"></i> 4.8 <span>(120
                                                 Reviews)</span></span>
                                         <h3><a href="tour-details.html">{{ $p['title'] }}</a></h3>

                                         <div class="pac_meta d-flex gap-2">
                                             <span class="pmeta_item"><i class="fa-regular fa-map"></i>
                                                 {{ $pack['destination']['name'] }}</span>
                                             {{-- <span class="pmeta_item"><i class="fa-regular fa-clock"></i> 3 Days - 4
                                                 Nights</span> --}}
                                         </div>

                                         <div class="discount_badge">
                                             25% Off
                                         </div>

                                         <div class="pack_btm d-flex">
                                             <span class="pack_price align-self-end"><b>{{ $p['price'] }}</b>
                                             </span>
                                             <a href="tour-details.html"
                                                 class="yellow_btn align-self-end ms-auto"><span>Book
                                                     Now</span></a>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         @endforeach
                         <!-- End Slide -->



                     </div>
                 </div>

                 <div class="slider_btm d-flex gap-4 justify-content-center">
                     <!-- Navigation -->
                     <div class="tslider_arrow tslider-arrow-prev align-self-center"><i class="ph ph-arrow-left"></i>
                     </div>
                     <!-- Pagination Progressbar -->
                     <div class="tslider-pagination align-self-center"></div>
                     <div class="tslider_arrow tslider-arrow-next align-self-center"><i class="ph ph-arrow-right"></i>
                     </div>
                 </div>
             </div><!-- End Col -->
         </div><!-- End Row -->
     </div>
 </section>
 <!-- End Tour Packages -->

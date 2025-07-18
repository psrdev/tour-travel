 <section class="tour_area section-padding">
     <div class="container">
         <div class="row g-4">
             <div class="col-xl-12 text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                 <div class="section-heading">
                     <span>Popular Tour</span>
                     <h2>Amazing Tour Places</h2>
                 </div>
             </div>


             @foreach ($packages as $pack)
                 @foreach ($pack['packages'] as $p)
                     <div class="col-xl-4 col-lg-6 col-12 mix new featured">
                         <div class="package_item">
                             <div class="pack_image">
                                 <img src="{{ asset('assets/img/tour/' . $p['image']) }}" alt="img">
                                 <div class="pac_badge">
                                     Featured
                                 </div>
                             </div>

                             <div class="pack_content">
                                 <span class="pack_rating"><i class="fa-solid fa-star"></i> 4.8 <span>(120
                                         Reviews)</span></span>
                                 <h3><a
                                         href="{{ route('front.destination.package.filter', ['dest' => $pack['destination']['slug'], 'pack' => $p['slug']]) }}">{{ $p['title'] }}</a>
                                 </h3>

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
                                     <span class="pack_price align-self-end"><b>{{ $p['price'] }}</b> </span>
                                     <a href="{{ route('front.destination.package.filter', ['dest' => $pack['destination']['slug'], 'pack' => $p['slug']]) }}"
                                         class="yellow_btn align-self-end ms-auto"><span>Details</span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             @endforeach





         </div><!-- End Row -->

         {{-- <div class="row mt-4">
             <div class="col-12">
                 <div class="tr-pagination text-center">
                     <a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                     <a href="#">1</a>
                     <a href="#">2</a>
                     <span>3</span>
                     <a href="#">4</a>
                     <a href="#">5</a>
                     <a href="#"><i class="fa-solid fa-angle-right"></i></a>
                 </div><!-- End Pagination Area -->
             </div><!-- End Col -->
         </div><!-- End Row --> --}}
     </div>
 </section>

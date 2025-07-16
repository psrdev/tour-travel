 <!-- Start Related Tour -->
 <section class="related_tour pb100">
     <div class="container">
         <div class="row">
             <div class="col-12 text-left">
                 <h2 class="related-title">Related Tours</h2>
             </div>
         </div>

         <div class="row">
             <div class="col-12">
                 <div class="related_tour_slider">
                     <div class="swiper-wrapper">
                         @foreach ($relatedPackages as $package)
                             <div class="swiper-slide package_item">
                                 <div class="pack_image">
                                     <img src="{{ asset('assets/img/tour/' . $package['image']) }}" alt="img">
                                     <div class="pac_badge">
                                         Featured
                                     </div>
                                 </div>

                                 <div class="pack_content">
                                     <span class="pack_rating"><i class="fa-solid fa-star"></i> 4.8 <span>(120
                                             Reviews)</span></span>
                                     <h3><a href="tour-details.html">{{ $package['title'] }}</a></h3>

                                     <div class="pac_meta d-flex gap-2">
                                         <span class="pmeta_item"><i class="fa-regular fa-map"></i>
                                             {{ $package['destination_name'] }}</span>

                                     </div>

                                     <div class="discount_badge">
                                         25% Off
                                     </div>

                                     <div class="pack_btm d-flex">
                                         <span class="pack_price align-self-end"><b>{{ $package['price'] }}</b> /
                                             <small>Person</small></span>
                                         <a href="{{ route('front.destination.package.filter', ['dest' => $package['destination_slug'], 'pack' => $package['slug']]) }}"
                                             class="yellow_btn align-self-end ms-auto"><span>Book
                                                 Now</span></a>
                                     </div>
                                 </div>
                             </div><!-- End Slide -->
                         @endforeach



                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Related Tour -->

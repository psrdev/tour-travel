 <!-- START Tour Details -->
 <section class="tour_details section-padding">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-12 wow fadeIn">
                 <div class="single_tour_details">
                     <div class="tour_entry_content">
                         <h3 class="tdtitle">Tour Overview</h3>
                         <p>
                             {{ $package['description'] }}
                         </p>

                     </div><!-- END Tour Entry Content -->

                     <div class="tour_info">
                         <h5>Highlights</h5>
                         <ul>
                             @foreach ($package['highlights'] as $high)
                                 <li>{{ $high }}</li>
                             @endforeach

                         </ul>
                     </div><!-- END Tour Info -->
                     <div class="tour_info">
                         <h5>Transportation</h5>
                         <ul>
                             @foreach ($package['transportation'] as $trans)
                                 <li>{{ $trans }}</li>
                             @endforeach

                         </ul>
                     </div><!-- END Tour Info -->
                     <div class="tour_info">
                         <h5>Exclusions</h5>
                         <ul>
                             @foreach ($package['exclusions'] as $exc)
                                 <li>{{ $exc }}</li>
                             @endforeach

                         </ul>
                     </div><!-- END Tour Info -->


                 </div>
             </div><!--- END COL -->

             <div class="col-lg-4 col-12 wow fadeIn">
                 <div class="stour_sidebar sticky-top">
                     <div class="booking_form stour_widget">
                         <div class="wpte-booking-inner-wrapper">
                             <!-- Discount Percent Badge -->
                             <span class="wpte-bf-discount-tag">25% Off</span>
                             <div class="wpte-bf-price-wrap">
                                 <div class="wpte-bf-price">

                                     <span class="wpte-bf-offer-price">
                                         <ins class="wpte-bf-offer-amount">{{ $package['price'] }}</ins>
                                         <div class="wpte-bf-pqty">/ Person</div>
                                     </span>
                                 </div>




                             </div>

                             <div class="wpte-bf-btn-wrap">
                                 <button class="yellow_btn d-none d-md-block align-self-center" data-bs-toggle="modal"
                                     data-bs-target="#bookingModal" data-product="Product A"><span>Book
                                         Now</span></button>
                             </div>
                         </div>
                     </div><!-- END Booking Form -->

                     <div class="stour_widget tour-question text-center">
                         <div class="icon">
                             <i class="far fa-question-circle"></i>
                         </div>
                         <div class="title">
                             Have something on your mind?
                         </div>
                         <div class="desc">
                             Ask Our tour agent and get the info you need!
                         </div>
                         <a class="blue_btn" href="#">
                             <span><i class="ph ph-chat-circle-dots"></i> Live Chat Now</span>
                         </a>
                     </div>
                 </div>
             </div><!--- END COL -->
         </div><!--- END ROW -->
     </div><!--- END CONTAINER -->
 </section>
 <!-- END Tour Details -->

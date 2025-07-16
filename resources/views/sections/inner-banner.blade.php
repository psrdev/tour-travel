 <!-- Start Main Banner -->
 <section class="main_banner" style="background-image: url({{ asset('assets/img/bg/banner_bg.jpg') }});">
     <div class="container">
         <div class="row">
             <div class="col-12 text-center">
                 <h1>{{ $title ?? 'Inner' }} </h1>
                 <p><a href="{{ route('front.home') }}">Home</a> / {{ $pagination ?? 'inner' }}</p>
             </div>
         </div>
     </div>
 </section>
 <!-- End Main Banner -->

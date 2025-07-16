<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brolion Tourism {{ isset($title) ? ' - ' . $title : '' }}</title>
    <link rel="favicon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Google Fonts (external) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/niceselect.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/YouTubePopUp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scroll-up.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    @include('partials.preloader')
    @include('partials.offcanvas')

    @include('partials.navigation')

    <main>
        @yield('content')
    </main>
    @include('partials.booking-model')
    @include('partials.footer')

    <!-- JS Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/nicesellect.js') }}"></script> --}}
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/YouTubePopUp.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/yvpopup-active.js') }}"></script>
    <script src="{{ asset('assets/js/scroll-up.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/newsletter.js') }}"></script>

    <!-- External Icon Library -->
    <script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1"></script>

    <script>
        // START Recomanded
        var mixproduct = mixitup('.tour_items');
        // END Recomanded

        jQuery(function() {
            jQuery(".trsslider").slider({
                value: 3,
                min: 1,
                max: 20,
                step: 1,
                slide: function(event, ui) {
                    updateInput(ui.value);
                }
            });

            function updateInput(value) {
                jQuery(".trsValue").val(value + " Days " + value + " Nights");
            }

            jQuery(".trsslider2").slider({
                value: 200,
                min: 1,
                max: 3000,
                step: 50,
                slide: function(event, ui) {
                    updateInput2(ui.value);
                }
            });

            function updateInput2(value) {
                jQuery(".trspvalue").val('$' + value);
            }

            jQuery(".trsValue").on('click', function() {
                jQuery(".trsslider").toggle();
            });

            jQuery(".trspvalue").on('click', function() {
                jQuery(".trsslider2").toggle();
            });
        });
    </script>

</body>

</html>

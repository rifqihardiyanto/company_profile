<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="description" content="Prysm HTML Templae for Consulting Corporate">
    <meta name="keywords"
        content="	accountant, advertising, agency, business, company, consulting, corporate, creative, finance, financial, insurance, marketing, multipurpose, software, startup">
    <meta name="author" content="Themexriver">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/ficon.png') }}" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/video.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rs6.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
</head>

@php
    $contact = App\Models\Contact::first();
@endphp
@php
    $logo = App\Models\Logo::first();
@endphp

<body>

    <!-- Preloader-->
    <div class="loading-preloader">
        <div id="loading-preloader">
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
        </div>
    </div>
    <!-- Preloader End -->


    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>
    @include('layout.header')

        @yield('content')

    @include('layout.footer')


    <!-- For Js Library -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/rbtools.min.js') }}"></script>
    <script src="{{ asset('assets/js/rs6.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/gmaps.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script>
        var revapi18,
            tpj;

        function revinit_revslider181() {
            jQuery(function() {
                tpj = jQuery;
                revapi18 = tpj("#rev_slider_18_1");
                if (revapi18 == undefined || revapi18.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_18_1");
                } else {
                    revapi18.revolution({
                        DPR: "dpr",
                        sliderLayout: "fullwidth",
                        visibilityLevels: "1240,1024,778,480",
                        gridwidth: 1240,
                        gridheight: 720,
                        perspective: 600,
                        perspectiveType: "global",
                        editorheight: "900,768,960,720",
                        responsiveLevels: "1240,1024,778,480",
                        ajaxUrl: "https://html.themexriver.com/nayeem/wp-admin/admin-ajax.php",
                        ajaxNonce: "9fd449e4b3",
                        progressBar: {
                            disableProgressBar: true
                        },
                        navigation: {
                            wheelCallDelay: 1000,
                            onHoverStop: false,
                            thumbnails: {
                                enable: true,
                                tmp: "<span class=\"tp-thumb-img-wrap\">  <span class=\"tp-thumb-image\"></span></span>",
                                style: "hades",
                                anim: "zoomin",
                                h_align: "right",
                                h_offset: 1,
                                v_offset: -1,
                                space: 13,
                                width: 70,
                                height: 70,
                                wrapper_padding: 20,
                                wrapper_color: "rgba(0, 0, 0, 0)",
                                container: "layergrid"
                            }
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid: true
                        },
                    });
                }

            });
        } // End of RevInitScript
        var once_revslider181 = false;

        jQuery(window).on("load", function() {
            revinit_revslider181();
        });
    </script>
</body>

</html>

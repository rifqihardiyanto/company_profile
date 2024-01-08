<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About</title>
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

    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    @php
        $logo = App\Models\Logo::first();
    @endphp
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
    <!-- Start of header section
 ============================================= -->
    @include('layout.header')

    @section('title', 'Tentang Kami')

    <!-- Start of Breadcrumb section
 ============================================= -->
    <section id="pr-breadcrumb" class="pr-breadcrumb-section position-relative"
        data-background="{{ asset('assets/img/bg/br-bg.jpg') }}">
        <span class="background_overlay"></span>
        <div class="container">
            <div class="pr-breadcrumb-content  text-center headline">
                <h2>@yield('title')</h2>
                <div class="pr-breadcrumb-item ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section
 ============================================= -->

    <!-- Start of About section
 ============================================= -->
    <section id="pr-about" class="pr-about-section">
        <div class="container">
            <div class="pr-about-content-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-text-wrap">
                            <div class="pr-section-title headline pera-content pr-text-in">
                                <h3 class="title-tag d-inline-block">
                                    <span class="pr-text-in_item1">
                                        <span class="pr-text-in_item2">
                                            <span class="pr-text-in_item3">
                                                About our Company
                                            </span>
                                        </span>
                                    </span>
                                </h3>
                                <h2>
                                    <span class="pr-text-in_item1">
                                        <span class="pr-text-in_item2">
                                            <span class="pr-text-in_item3">
                                                Building competitive
                                                business sectors.
                                            </span>
                                        </span>
                                    </span>
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">New analytic
                                    tools can help manufacturers in labor-intensive sectors boost productivity and
                                    earnings by double-digit on It is a secure and simple on-demand, the total
                                    percentages.
                                </p>
                            </div>
                            <div id="featured_scroll" class="about-text-scroller-wrap">
                                <div class="about-text-scroller-item">
                                    <div class="about-scoller-item wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div
                                            class="about-scoller-item-icon float-left d-flex justify-content-center align-items-center position-relative">
                                            <i class="flaticon-high-value"></i>
                                        </div>
                                        <div class="about-scoller-item-text headline pera-content">
                                            <h3><a href="#">Company Values</a></h3>
                                            <p>We help organizations across private, public, and social sectors create
                                                on the Change that Matters most to them.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-text-scroller-item wow fadeInUp" data-wow-delay="300ms"
                                    data-wow-duration="1500ms">
                                    <div class="about-scoller-item">
                                        <div
                                            class="about-scoller-item-icon float-left d-flex justify-content-center align-items-center position-relative">
                                            <i class="flaticon-objectives"></i>
                                        </div>
                                        <div class="about-scoller-item-text headline pera-content">
                                            <h3><a href="service-single.html">Our Mission</a></h3>
                                            <p>We help organizations across private, public, and social sectors create
                                                on the Change that Matters most to them.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-text-scroller-item">
                                    <div class="about-scoller-item">
                                        <div
                                            class="about-scoller-item-icon float-left d-flex justify-content-center align-items-center position-relative">
                                            <i class="flaticon-market"></i>
                                        </div>
                                        <div class="about-scoller-item-text headline pera-content">
                                            <h3><a href="service-single.html">Company MarketIng</a></h3>
                                            <p>We help organizations across private, public, and social sectors create
                                                on the Change that Matters most to them.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-text-scroller-item">
                                    <div class="about-scoller-item">
                                        <div
                                            class="about-scoller-item-icon float-left d-flex justify-content-center align-items-center position-relative">
                                            <i class="flaticon-data-analysis"></i>
                                        </div>
                                        <div class="about-scoller-item-text headline pera-content">
                                            <h3><a href="service-single.html">MarketIng Analysis</a></h3>
                                            <p>We help organizations across private, public, and social sectors create
                                                on the Change that Matters most to them.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-text-scroller-item">
                                    <div class="about-scoller-item">
                                        <div
                                            class="about-scoller-item-icon float-left d-flex justify-content-center align-items-center position-relative">
                                            <i class="flaticon-strategy"></i>
                                        </div>
                                        <div class="about-scoller-item-text headline pera-content">
                                            <h3><a href="service-single.html">Company strategy</a></h3>
                                            <p>We help organizations across private, public, and social sectors create
                                                on the Change that Matters most to them.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="about-img-wrap position-relative">
                            <div class="about-img-item">
                                <img src="{{ asset('assets/img/about/ab1.png') }}" alt="">
                            </div>
                            <div class="about-exp-text-area d-flex align-items-center justify-content-center">
                                <div class="about-exp-icon d-flex justify-content-center align-items-center">
                                    <i class="flaticon-analytics"></i>
                                </div>
                                <div class="about-exp-icon-text headline pera-content">
                                    <h3><span>821</span><sup>+</sup></h3>
                                    <p>Successful Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About section
 ============================================= -->



    <!-- Start of About CTA section
 ============================================= -->
    <section id="pr-about-cta" class="pr-about-cta-section">
        <div class="pr-about-cta-content headline text-center pera-content position-relative"
            data-background="{{ asset('assets/img/bg/br-bg.jpg') }}">
            <div class="background_overlay"></div>
            <div class="container">
                <div class="pr-about-cta-title position-relative">
                    <h3>Visi</h3>
                    <p>New research reveals the barriers Black talent in the film and TV industry face, the economic
                        fallout, and solutions for creating a more inclusive, equitable workplace. As
                        #WorldImmunizationWeek
                        off, gain insight on progress and lessons learned so far.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About CTA section
 ============================================= -->


    <!-- Start of team  section
 ============================================= -->
    <section id="pr-team-page-team" class="pr-team-page-team-section">
        <div class="container">
            <div class="pr-section-title headline text-center middle-align pera-content pr-text-in">
                <h3 class="title-tag d-inline-block">
                    <span class="pr-text-in_item1">
                        <span class="pr-text-in_item2">
                            <span class="pr-text-in_item3">
                                Our Leadership and People
                            </span>
                        </span>
                    </span>
                </h3>
                <h2>
                    <span class="pr-text-in_item1">
                        <span class="pr-text-in_item2">
                            <span class="pr-text-in_item3">
                                We hear over and over again that it
                                feels different to work with us.
                            </span>
                        </span>
                    </span>
                </h2>
            </div>
            <div class="pr-team-member-content">
                <div class="row">
                    @foreach ($managements as $data)
                        <div class="col-lg-3 col-md-6">
                            <div class="pr-team-member-inner-item text-center">
                                <div class="pr-team-member-img position-relative">
                                    <img src="{{ asset('uploads/' . $data->gambar) }}" alt="">
                                </div>
                                <div class="pr-team-member-text headline pera-content">
                                    <h3>{{ $data->nama }}</h3>
                                    <span>{{ $data->jabatan }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End of team section
 ============================================= -->


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
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/gmaps.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
</body>

</html>

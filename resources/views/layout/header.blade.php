<!-- Start of header section
 ============================================= -->
<header id="pry-header" class="pry-main-header header-syle-one">
    <div class="header-top">
        <div class="container">
            <div class="header-top-content d-flex justify-content-between pera-content align-items-center">
                <div class="header-top-text">
                    <p>We are the Best Consulting web site as part of the annual WebAward Competition!</p>
                </div>
                <div class="social-item">
                    <a class="fb-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="tw-icon" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="dri-icon" href="#"><i class="fal fa-basketball-ball"></i></a>
                    <a class="bh-icon" href="#"><i class="fab fa-behance"></i></a>
                </div>
            </div>
        </div>
    </div>
    @php
        $contact = App\Models\Contact::first();
    @endphp
    @php
        $logo = App\Models\Logo::first();
    @endphp
    <div class="header-cta-content">
        <div class="container">
            <div class="header-logo-cta-area d-flex">
                <div class="brand-logo">
                    <a href="{{ url('/') }}"><img style="width: 143px; height: 38px;" src="{{ asset('uploads/' . $logo->logo_header) }}"
                            alt=""></a>
                </div>
                <div class="header-cta-wrapper d-flex">
                    <div class="pr-header-info-item d-flex align-items-center position-relative">
                        <div class="hd-item-icon">
                            <i class="flaticon-phone-call-1"></i>
                        </div>
                        <div class="hd-item-meta">
                            <label>Call Us for help!</label>
                            <span>{{ $contact->no_hp }}</span>
                        </div>
                    </div>
                    <div class="pr-header-info-item d-flex align-items-center position-relative">
                        <div class="hd-item-icon">
                            <i class="flaticon-pin"></i>
                        </div>
                        <div class="hd-item-meta">
                            <label>Main Location</label>
                            <span>{{ $contact->lokasi }}</span>
                        </div>
                    </div>
                    <div class="pr-header-info-item d-flex align-items-center position-relative">
                        <div class="hd-item-icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="hd-item-meta">
                            <label>Mail Us</label>
                            <span>{{ $contact->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $categories = App\Models\Category::all();
    @endphp
    <div class="header-navigation-area">
        <div class="container">
            <div class="header-navigation-content align-items-center d-flex">
                <nav class="pr-main-navigation clearfix ul-li">
                    <ul id="pr-main-nav" class="nav navbar-nav clearfix">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li><a href="{{ url('/home/about') }}">About</a></li>
                        <li><a href="{{ url('/home/blog') }}">Blog</a></li>
                        <li class="dropdown">
                            <a href="{{ url('/home/produk') }}">Product</a>
                            <ul class="dropdown-menu clearfix">
                                @foreach ($categories as $data)
                                    <li><a href="{{ url('/home/kategori/' . $data->id) }}">{{ $data->nama_kategori }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ url('/home/kontak') }}">Contact </a></li>
                        {{-- <li class="dropdown">
								<a href="#">Pages</a>
								<ul class="dropdown-menu clearfix">
									<li><a href="404.html">404 Page </a></li>
									<li><a href="service.html">Service Page </a></li>
									<li><a href="service-single.html">Service Details </a></li>
									<li><a href="team.html">Team</a></li>
									<li><a href="team-single.html">Team Details</a></li>
								</ul>
							</li> --}}
                    </ul>
                </nav>
                <div class="pr-header-cta-btn-search align-items-center d-flex">
                    <div class="pr-h-search">
                        <button class="search-box-outer"><i class="far fa-search"></i></button>
                    </div>
                    <div class="pr-h-cta-btn d-flex justify-content-center align-items-center">
                        <a href="https://api.whatsapp.com/send?phone={{ $contact->no_konsultasi }}"
                            target="_blank">Free Consulting <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile_menu position-relative">
        <div class="mobile_menu_button open_mobile_menu">
            <i class="fal fa-bars"></i>
        </div>
        <div class="mobile_menu_wrap">
            <div class="mobile_menu_overlay open_mobile_menu"></div>
            <div class="mobile_menu_content">
                <div class="mobile_menu_close open_mobile_menu">
                    <i class="fal fa-times"></i>
                </div>
                <div class="m-brand-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('uploads/' . $logo->logo_header_mobile) }}"
                            alt=""></a>
                </div>
                <nav class="mobile-main-navigation  clearfix ul-li">
                    <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li><a href="{{ url('home/about') }}">About</a></li>
                        <li><a href="{{ url('/home/blog') }}">Blog</a></li>
                        <li class="dropdown">
                            <a href="{{ url('/home/produk') }}">Product</a>
                            <ul class="dropdown-menu clearfix">
                                @foreach ($categories as $data)
                                    <li><a href="{{ url('category/' . $data->id) }}">{{ $data->nama_kategori }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ url('/home/kontak') }}">Contact </a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /Mobile-Menu -->
    </div>
    <div class="mobile_logo">
        <a href="{{ url('/') }}"><img src="{{ asset('uploads/' . $logo->logo_header_mobile) }}" alt=""></a>
    </div>
</header>
<div class="search-popup">
    <button class="close-search style-two"><span class="fal fa-times"></span></button>
    <button class="close-search"><span class="fa fa-arrow-up"></span></button>
    <form method="post" action="blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End of header section
 ============================================= -->

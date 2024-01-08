@php
    $contact = App\Models\Contact::first();
@endphp

<!-- Start of newslatter section
============================================= -->
{{-- <div id="pr-newslatter" class="pr-newslatter-section position-relative">
    <span class="pr-newslatter-img position-absolute"><img src="assets/img/logo/en.png" alt=""></span>
    <div class="container">
        <div class="pr-newslatter-content d-flex justify-content-between align-items-center">
            <div class="pr-newslatter-text headline pera-content">
                <p>Stay ahead in a rapidly world. Subscribe to <a href="#">Prysm Insights,</a>
                    our monthly look at the critical issues facing global business.</p>
            </div>
            <div class="pr-newslatter-form position-relative">
                <form action="#">
                    <input type="text" placeholder="Your mail address...">
                    <button>Subscribe now</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}
<!-- End of Cta section
============================================= -->

<!-- Start of footer section
============================================= -->
<section id="pr-footer" class="pr-footer-section">
    <div class="container">
        <div class="pr-footer-content">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="pr-footer-widget headline pera-content ul-li-block">
                        <div class="logo-widget">
                            <div class="pr-footer-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('uploads/' . $logo->logo_footer) }}" alt=""></a>
                            </div>
                            <p>{{ $contact->deskripsi_footer }}</p>
                            <div class="pr-footer-social">
                                <a class="fb-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="tw-icon" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="dri-icon" href="#"><i class="fal fa-basketball-ball"></i></a>
                                <a class="bh-icon" href="#"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pr-footer-widget headline pera-content ul-li-block">
                        <div class="address-widget">
                            <h2 class="widget-title">Contact info</h2>
                            <ul>
                                <li><i class="fas fa-phone-alt"></i> <span> {{ $contact->no_hp }} </span> </li>
                                <li><i class="fas fa-envelope"></i> <span> {{ $contact->email_support }} </span> </li>
                                <li><i class="far fa-map-marker-alt"></i> <span>{{ $contact->lokasi }} </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pr-footer-widget headline pera-content ul-li-block">
                        <div class="menu-widget">
                            <h2 class="widget-title">Quick link</h2>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/home/about') }}">About us</a></li>
                                <li><a href="{{ url('/home/blog') }}">Blog</a></li>
                                <li><a href="{{ url('/home/produk') }}">Product</a></li>
                                <li><a href="{{ url('/home/kontak') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pr-copyright-wrap pera-content d-flex justify-content-between align-items-center">
            <div class="pr-copyright-text">
                <p>© 2024 Nashir</p>
            </div>
            <div class="pr-copyright-menu ul-li">
                <ul>
                    <li><a href="#">Privacy Policy </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of footer section
============================================= -->
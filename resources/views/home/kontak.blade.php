@extends('layout.main')

@section('title', 'Kontak Kami')

@section('content')

    <!-- Start of Breadcrumb section
     ============================================= -->
    <section id="pr-breadcrumb" class="pr-breadcrumb-section position-relative" data-background="{{ asset('assets/img/bg/br-bg.jpg') }}">
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

    <!-- Start of contact page section
     ============================================= -->
    <section id="pr-contact-wrap" class="pr-contact-wrap-section position-relative">
        <span class="cnt-map-bg position-absolute"><img src="{{ asset('assets/img/c-map.png') }}" alt=""></span>
        <div class="container">
            <div class="pr-section-title headline text-center middle-align pera-content pr-text-in">
                <h3 class="title-tag d-inline-block">
                    <span class="pr-text-in_item1">
                        <span class="pr-text-in_item2">
                            <span class="pr-text-in_item3">
                                {{ $contact->judul }}
                            </span>
                        </span>
                    </span>
                </h3>
                <h2>
                    <span class="pr-text-in_item1">
                        <span class="pr-text-in_item2">
                            <span class="pr-text-in_item3">
                                {{ $contact->deskripsi }}
                            </span>
                        </span>
                    </span>
                </h2>
            </div>
            <div class="pr-contact-page-content">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="pr-contact-img">
                            <img src="{{ asset('assets/img/cnt.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="pr-contact-cta-wrapper">
                            <div class="pr-contact-cta-item-inner d-flex align-items-center">
                                <div class="pr-contact-cta-icon d-flex align-items-center justify-content-center">
                                    <i class="flaticon-phone-call-1"></i>
                                </div>
                                <div class="pr-contact-cta-text headline">
                                    <h3>Phone No</h3>
                                    <h4>{{ $contact->no_hp }}</h4>
                                </div>
                            </div>
                            <div class="pr-contact-cta-item-inner d-flex align-items-center">
                                <div class="pr-contact-cta-icon d-flex align-items-center justify-content-center">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="pr-contact-cta-text headline">
                                    <h3>Email</h3>
                                    <h4>{{ $contact->email_support }}</h4>
                                </div>
                            </div>
                            <div class="pr-contact-cta-item-inner d-flex align-items-center">
                                <div class="pr-contact-cta-icon d-flex align-items-center justify-content-center">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="pr-contact-cta-text headline">
                                    <h3>Location</h3>
                                    <h4>{{ $contact->lokasi }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of contact page section
     ============================================= -->

@endsection

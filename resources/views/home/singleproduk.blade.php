@extends('layout.main')

@section('title', 'Produk')

@section('content')
    <!-- Start of Breadcrumb section
         ============================================= -->
    <section id="pr-breadcrumb" class="pr-breadcrumb-section position-relative" data-background="{{ asset('assets/img/bg/br-bg.jpg') }}">
        <span class="background_overlay"></span>
        <div class="container">
            <div class="pr-breadcrumb-content  text-center headline">
                <h2>Produk Details</h2>
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

    <!-- Start of portfolio details section
         ============================================= -->
    <section id="pr-portfolio-details" class="pr-portfolio-details-section">
        <div class="container">
            <div class="pr-portfolio-details-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pr-portfolio-details-sidebar">
                            <div class="pr-portfolio-item-details ul-li-block headline">
                                <ul>
                                    <li>
                                        <h3>Nama Produk</h3>
                                        <span>{{ $product->nama_produk }}</span>
                                    <li>
                                        <h3>Kategori</h3>
                                        <span>{{ $product->category->nama_kategori }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="service-add">
                            <a href="#">
                                <img src="{{ asset('assets/img/bg/add.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="pr-portfolio-item-details-text headline pera-content">
                            <div class="pr-portfolio-details-img">
                                <img src="{{ asset('assets/img/blog/bd-d1.jpg') }}" alt="">
                            </div>
                            <h3>{{ $product->nama_produk }}</h3>
                            <p>{{ $product->deskripsi_1 }}</p>
                            <div class="pr-portfolio-details-img">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/img/case/cs1.png') }}" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/img/case/cs2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <p>{{ $product->deskripsi_2 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  portfolio details  of  section
         ============================================= -->
@endsection

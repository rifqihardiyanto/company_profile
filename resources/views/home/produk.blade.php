@extends('layout.main')

@section('title', 'Semua Produk')

@section('content')
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
                        @foreach ($categories as $data)
                            <li><a class="active" href="{{ url('/home/kategori/' . $data->id) }}">{{ $data->nama_kategori }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section
         ============================================= -->

    <!-- Start of portfolio section
         ============================================= -->
    <section id="pr-portfolio" class="pr-portfolio-section">
        <div class="container">
            <div class="pr-portfolio-content">
                <div class="row">
                    @foreach ($products as $data)
                        <div class="col-lg-3 col-md-6">
                            <div class="pr-portfolio-inner-item position-relative">
                                <span class="pr-item-bg1 position-absolute"><img
                                        src="{{ asset('uploads/' . $data->gambar_1) }}" alt=""></span>
                                <span class="pr-item-bg2 position-absolute"><img
                                        src="{{ asset('uploads/' . $data->gambar_1) }}" alt=""></span>
                                <div class="pr-portfolio-img">
                                    <img src="{{ asset('uploads/' . $data->gambar_1) }}" alt="">
                                </div>
                                <div class="pr-portfolio-text headline pera-content">
                                    <h3><a href="{{ url('home/produk/' . $data->id) }}">{{ $data->nama_produk }}</a></h3>
                                    <span>{{ $data->category->nama_kategori }}</span>
                                    <div class="pr-portfolio-btn">
                                        <a href="{{ url('home/produk/' . $data->id) }}"><i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="pr-pagination-wrap text-center ul-li">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End of portfolio section
         ============================================= -->
@endsection

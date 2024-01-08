@extends('layout.main')

@section('title', 'Blog')

@section('content')
    <!-- Start of Breadcrumb section
         ============================================= -->
    <section id="pr-breadcrumb" class="pr-breadcrumb-section position-relative"
        data-background="{{ asset('assets/img/bg/br-bg.jpg') }}">
        <span class="background_overlay"></span>
        <div class="container">
            <div class="pr-breadcrumb-content  text-center headline">
                <h2>Blog Details</h2>
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

    <!-- Start of blog details section
         ============================================= -->
    <section id="pr-blog-details" class="pr-blog-details-section">
        <div class="container">
            <div class="blog-details-content">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-details-img-text">
                            <div class="blog-details-img position-relative">
                                <img src="{{ asset('uploads/' . $blog->gambar_2) }}" alt="">
                            </div>
                            <div class="pr-blog-details-item">
                                <div class="blog-details-text headline">
                                    <div class="prd-blog-meta-2  position-relative text-capitalize">
                                        <i class="far fa-clock"></i> September 12, 2020
                                    </div>
                                    <h3>{{ $blog->judul }}</h3>
                                    <p>{{ $blog->deskripsi_1 }}</p>
                                    <div class="blog-details-img-video">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="blog-details-img position-relative">
                                                    <img src="{{ asset('uploads/' . $blog->gambar_3) }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="blog-details-img position-relative">
                                                    <img src="{{ asset('uploads/' . $blog->gambar_4) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>{{ $blog->deskripsi_2 }}</p>
                                    <blockquote>
                                        {{$blog->blockquote}}
                                    </blockquote>
                                </div>
                                <div class="pr-blog-tag-share clearfix">
                                    <div class="pr-blog-share float-right">
                                        <a class="fb-social" href="#"><i class="fab fa-facebook-f"></i><span>Like
                                                Us</span></a>
                                        <a class="tw-social" href="#"><i class="fab fa-twitter"></i><span>Like
                                                Us</span></a>
                                        <a class="ln-social" href="#"><i class="fab fa-linkedin-in"></i><span>Like
                                                Us</span></a>
                                        <a class="in-social" href="#"><i class="fab fa-instagram"></i><span>Like
                                                Us</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of  blog details section
         ============================================= -->
@endsection

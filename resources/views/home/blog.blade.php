@extends('layout.main')

@section('title', 'Blog')

@section('content')
    <!-- Start of Breadcrumb section
     ============================================= -->
    <section id="pr-breadcrumb" class="pr-breadcrumb-section position-relative" data-background="{{ asset('assets/img/bg/br-bg.jpg') }}">
        <span class="background_overlay"></span>
        <div class="container">
            <div class="pr-breadcrumb-content  text-center headline">
                <h2>Blog</h2>
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

    <!-- Start of blog feed section
     ============================================= -->
    <section id="pr-blog-feed" class="pr-blog-feed-section">
        <div class="container">
            <div class="pr-section-title headline text-center middle-align pera-content pr-text-in">
                <h3 class="title-tag d-inline-block">
                    <span class="pr-text-in_item1">
                        <span class="pr-text-in_item2">
                            <span class="pr-text-in_item3">
                                Featured Insights
                            </span>
                        </span>
                    </span>
                </h3>
                <h2>
                    <span class="pr-text-in_item1">
                        <span class="pr-text-in_item2">
                            <span class="pr-text-in_item3">
                                Our latest thinking on the issues
                                that matter most in business.
                            </span>
                        </span>
                    </span>
                </h2>
            </div>
            <div class="pr-blog-feed-content">
                <div class="row">
                    @foreach ($blogs as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="pr-blog-inner-item">
                            <div class="pr-blog-img-item">
                                <img src="{{ asset('uploads/' . $data->gambar_1) }}" alt="">
                            </div>
                            <div class="pr-blog-text-item headline pera-content">
                                <div class="item-meta">
                                    <a href="{{ url('home/blog/'. $data->id) }}"><i class="fal fa-calendar-alt"></i> June 10, 2021</a>
                                </div>
                                <h3><a href="{{ url('home/blog/'. $data->id) }}">{{ $data->judul }}</a></h3>
                                <p style="  white-space: nowrap; 
                                overflow: hidden;
                                text-overflow: ellipsis;">{{ $data->deskripsi_1 }}</p>
                                <div class="item-author-meta d-flex justify-content-between align-items-center">
                                    <div class="pr-blog-more">
                                        <a href="{{ url('home/blog/'. $data->id) }}">More Details <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
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
    <!-- End of blog feed section
     ============================================= -->
@endsection

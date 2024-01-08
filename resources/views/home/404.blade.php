@extends('layout.main')

@section('title', '404 Not Found')

@section('content')

<!-- Start of 404 content section
	============================================= -->
	<section id="error" class="error-section position-relative">
		<span class="cnp-bg position-absolute"><img src="{{ asset('assets/img/backgrounds/bg_new.jpg') }}" alt=""></span>
		<div class="container">
			<div class="pr-error-img text-center">
				<img src="assets/img/logo/404.png" alt="">
			</div>
			<div class="pr-error-text text-center position-relative headline pera-content">
				<h3>Page Not Found</h3>
				<p>Something went wrong, Looks like this page doesn't exist anymore.</p>
				<div class="pr-btn">
					<a class="d-flex justify-content-center align-items-center" href="{{ url('/') }}">Go Back Home</a>
				</div>
			</div>
		</div>
	</section>
<!-- End 404 content section
	============================================= -->	

@endsection

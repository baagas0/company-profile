@extends('layouts.frontend.app')
@section('content')
	<?php
		use App\Models\Galery;
		use App\Models\Testimonies;
	?>
	<!-- Banner Area Start -->
	<div class="banner-area-wrapper about">
		<div class="banner-area text-center" style="background: url({{ Setting('about-banner')->file }});">	
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="banner-content-wrapper">
							<div class="banner-content">
								<h2>Testimoni</h2> 
								<div class="banner-breadcrumb">
									<ul>
										<li><a href="index.html">home </a><i class="zmdi zmdi-arrow-right"></i></li>
										<li>testimoni page</li>
									</ul>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Banner Area End -->
	<!-- About Us Start -->
	<section id="about-us" class="about-us-area pt-100 pb-100 text-center">
		<div class="container">
			<?php
				$testimonies = Testimonies::get();
			?>
			@foreach($testimonies as $testimoni)
			<div class="row">
				<div class="col-md-6 col-sm-5 col-xs-12">	
					<div class="about-us-img">
						<div class="row"> 
							<div class="grid">
								<?php 
								$galeries = Galery::limit(3)->where('testimoni_id', $testimoni->id)->get();
								?>
								@foreach($galeries as $galeri)
								<div class="grid-item cat2 cat3">
									<img src="{{ asset($galeri->image) }}" alt="project" />
									<div class="portfolio-hover">
										<ul>
											<li>
												<a class="image-popup" href="{{ asset($galeri->image) }}"><span class="ti-camera"></span></a>
											</li>
										</ul>
										<h3>{{ $galeri->title }}</h3>
										<p>{{ $galeri->description }}</p>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-7 col-xs-12">
					<div class="about-us-content text-left">
						{{-- <div class="row"> --}}
							{{-- <div class="testimonial-owl"> --}}
								
								{{-- <div class="col-xs-12"> --}}
									<div class="single-testimonial" style="padding: 5px 0 0px!important;">
										<div class="testimonial-content">
											<p><span class="ti-quote-left"></span>{{ $testimoni->content }}<span class="ti-quote-right"></span></p>    
												<h5>{{ $testimoni->name }}</h5>
												<h6>Klien</h6>
										</div>
									</div>
								{{-- </div> --}}
								
							{{-- </div> --}}
						{{-- </div>  --}}
					</div>
				</div>
			</div>   
			@endforeach 
			{!! pagiSetting('testimoni', 3 )->links('vendor.pagination.default') !!}
		</div>
	</section>
	<!-- About Us End --> 
@endsection
@extends('layouts.frontend.app')
@section('content')
	<!-- Banner Area Start -->
	<div class="banner-area-wrapper about">
		<div class="banner-area text-center" style="background: url({{ asset(Setting('galeri-banner')->file) }})">	
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="banner-content-wrapper">
							<div class="banner-content">
								<h2>portfolio</h2> 
								<div class="banner-breadcrumb">
									<ul>
										<li><a href="index.html">home </a><i class="zmdi zmdi-arrow-right"></i></li>
										<li>portfolio page</li>
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
	<!-- latest area start -->
	<div id="portfolio" class="latest-area text-center pt-95 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="project-title text-left">
						<h3>Galeri Proyek</h3> 
					</div>
				</div>
			</div>
			<div class="row">            
				<div class="portfolio_gallery_area">
					<div class="gallery"> 
						<div class="gallery_items clearfix">
							<?php use App\Models\Galery;
							$galeries = Galery::paginate(6);
							?>
							@foreach($galeries as $galeri)
							<div class="grid-item single-portfolio grid-item-1 graphic print Branding">
								<div class="portfolio_effect single-portfolio-item">
									<img class="img-responsive" src="{{ asset($galeri->image) }}" alt="galeri">
									<div class="portfolio-detail">
										<a class="image-popup" href="img/project/project1b.jpg">
											<span class="ti-fullscreen"></span>
										</a>
										<div class="portfolio-detail-info">
											<h5 style="color: #ffff">{{ $galeri->title }}</h5>
											<h6>{{ $galeri->description }}</h6>
										</div>
									</div>
								</div>
							</div><!-- grid-item End --> 
							@endforeach
						</div><!-- gallery-items End --> 
					</div><!-- gallery End --> 
				</div><!-- portfolio_gallery_area End -->  
			</div>  
		</div>
							{!! $galeries->links('vendor.pagination.default') !!}
	</div>
	<!-- latest area end -->
@endsection
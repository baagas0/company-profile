@extends('layouts.frontend.app')
@section('content')
	<!-- Banner Area Start -->
	<div class="banner-area-wrapper about">
		<div class="banner-area text-center" style="background: url({{ Setting('about-banner')->file }});">	
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="banner-content-wrapper">
							<div class="banner-content">
								<h2>about us</h2> 
								<div class="banner-breadcrumb">
									<ul>
										<li><a href="index.html">home </a><i class="zmdi zmdi-arrow-right"></i></li>
										<li>about page</li>
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
	<!-- About Start -->
	@include('layouts.frontend.partials.about')
	<!-- About End -->
	<!-- Knowledge Area Start --> 
	<div class="knowledge-area pt-95 pb-100" style="background-image: url({{ asset(Setting('knowledge-background')->file) }})">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="knowledge-content">
						<h3>Pengalaman Kita</h3>
						<p>Dengan pengalaman team kita yang sudah bertahun tahun di bidangnya maka kami 100% siap mengerjakan kerja sama dengan anda.</p>
						<div class="skill-area">
							@foreach(getSetting('knowledge-progress') as $knowledge)
							<div class="skill-bar-item">
								<span>{{ $knowledge->title }}</span>
								<div class="progress">
									<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: {{ $knowledge->value }}%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="{{ $knowledge->value }}%" class="progress-bar wow fadeInLeft">
										<span class="text-top">{{ $knowledge->value }}%</span>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>            
				</div>
				<div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
					<div class="knowlegde-img">
						<a href="#"><img src="{{ asset(Setting('knowledge-image')->file) }}" alt="knowledge"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Knowledge Area End --> 
@endsection
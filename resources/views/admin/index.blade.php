@extends('layouts.admin.app')
@section('content')

<?php
	use App\Models\Setting;
	use App\Models\Slider;
	use App\Models\Galery;
	use App\Models\Blog;
	use Spatie\Activitylog\Models\Activity;

	$settingCount = count(Setting::get());
	$sliderCount = count(Slider::get());
	$galeryCount = count(Galery::get());
	$blogCount = count(Blog::get());
?>
<div class="row">
	<div class="col-12">
		<h2 class="page-title">Dashboard</h2>
	</div>
</div>
<div class="row">
	<div class="col-lg-6 col-md-12">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="card info-card">
					<div class="card-body">
						<h5 class="card-title">Web Setting</h5>
						<div class="info-card-text">
							<h3>{{ $settingCount }}</h3>
							<span class="info-card-helper">Data Setting</span>
						</div>
						<div class="info-card-icon">
							<i class="material-icons">trending_up</i>
						</div>
					</div>
					<div id="sparkline-bar"></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="card info-card info-info">
					<div class="card-body">
						<h5 class="card-title">Slider</h5>
						<div class="info-card-text">
							<h3>{{ $sliderCount }}</h3>
							<span class="info-card-helper">Data Slider</span>
						</div>
						<div class="info-card-icon">
							<i class="material-icons-outlined">remove_red_eye</i>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="card info-card info-warning">
					<div class="card-body">
						<h5 class="card-title">Galeri</h5>
						<div class="info-card-text">
							<h3>{{ $galeryCount }}</h3>
							<span class="info-card-helper">Foto</span>
						</div>
						<div class="info-card-icon">
							<i class="material-icons">attach_money</i>
						</div>
					</div>
					<div id="sparkline-line"></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="card info-card info-success">
					<div class="card-body">
						<h5 class="card-title">Blog</h5>
						<div class="info-card-text">
							<h3>{{ $blogCount }}</h3>
							<span class="info-card-helper">Postingan</span>
						</div>
						<div class="info-card-icon">
							<i class="material-icons">trending_up</i>
						</div>
					</div>
					<div id="sparkline-bar-2"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Browsers</h5>
				<ul class="list-unstyled browser-list">
					<li class="trending-up"><span class="browser-icon"><i class="fab fa-chrome"></i></span>Google Chrome <span class="browser-stat">Supported <i class="material-icons">trending_up</i></span></li>
					<li class="trending-up"><span class="browser-icon"><i class="fab fa-firefox"></i></span>Mozilla Firefox <span class="browser-stat">Supported <i class="material-icons">trending_up</i></span></li>
					<li class="trending-up"><span class="browser-icon"><i class="fab fa-opera"></i></span>Opera <span class="browser-stat">Supported <i class="material-icons">trending_up</i></span></li>
					<li class="trending-up"><span class="browser-icon"><i class="fab fa-edge"></i></span>Microsoft Edge <span class="browser-stat">Supported <i class="material-icons">trending_up</i></span></li>
					<li class="trending-up"><span class="browser-icon"><i class="fab fa-safari"></i></span>Safari <span class="browser-stat">Supported <i class="material-icons">trending_up</i></span></li>
					{{-- <li class="trending-up"><span class="browser-icon"><i class="fas fa-globe"></i></span>Other <span class="browser-stat">6% <i class="material-icons">trending_up</i></span></li> --}}
				</ul>
				{{-- <a href="#" class="btn btn-text-secondary float-right">Details</a> --}}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-8">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">User Activity Logs</h5>
				<ul class="report-list list-unstyled">
					@if(count(Activity::orderBy('created_at', 'DESC')->where('causer_id', Auth::user()->id)->get()) < 1)
						<li class="report-item">
							<div class="report-icon"><i class="material-icons">error_outline</i></div>
							<div class="report-text">User Logs Activity
								<span>User Activity Is Null</span>
							</div>
							{{-- <div class="report-helper">45min ago</div> --}}
						</li>
					@endif
					@foreach(Activity::orderBy('created_at', 'DESC')->where('causer_id', Auth::user()->id)->get() as $activity)
						<?php 
							$content = 'Not Slider';
							if ($activity->description == 'created') {
								if ($activity->subject_type == 'App\Models\Slider') {
									$content = 'Create new slider data';
								}
								$icon = 'add';
							}elseif ($activity->description == 'updated') {
								if ($activity->subject_type == 'App\Models\Slider') {
									$content = 'Update exist slider data';
								}
								$icon = 'update';
							}elseif ($activity->description == 'deleted') {
								if ($activity->subject_type == 'App\Models\Slider') {
									$content = 'Delete exist slider data';
								}
								$icon = 'delete';
							}

						?>
						<li class="report-item">
							<div class="report-icon"><i class="material-icons">{{ $icon }}</i></div>
							<div class="report-text">{{ $activity->log_name }}
								<span>{{ $content }}</span>
							</div>
							<div class="report-helper">45min ago</div>
						</li>
						@if($loop->iteration  == 3)
						 @break
						@endif
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Server Load</h5>
				<div class="card-info"><span class="badge badge-secondary">Optimal</span></div>
				<div class="server-load row">
					<div class="server-stat col-sm-4">
						<p>1,3GB</p>
						<span>Disk Usage</span>
					</div>
					<div class="server-stat col-sm-4">
						<p>32GB</p>
						<span>Ram Space</span>
					</div>
					<div class="server-stat col-sm-4">
						<p>Xeon</p>
						<span>CPU</span>
					</div>
				</div>
				<div id="dash-flotchart"></div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('css')
<link href="{{ asset('backend/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet">
@endpush
@push('js')
<script src="{{ asset('backend/plugins/d3/d3.min.js') }}"></script>
<script src="{{ asset('backend/plugins/nvd3/nv.d3.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('backend/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('backend/plugins/flot/jquery.flot.time.min.js') }}"></script>
<script src="{{ asset('backend/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
<script src="{{ asset('backend/plugins/flot/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('backend/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>

@endpush
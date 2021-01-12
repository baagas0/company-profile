@extends('layouts.frontend.app')
@section('content')
<?php
	use App\Models\Blog;
	use App\Models\User;
	use Carbon\Carbon;
?>
<!-- Banner Area Start -->
<div class="banner-area-wrapper about">
	<div class="banner-area text-center" style="background-image: url({{ asset(Setting('blog-banner')->file) }})">	
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="banner-content-wrapper">
						<div class="banner-content">
							<h2>blog details</h2> 
							<div class="banner-breadcrumb">
								<ul>
									<li><a href="/">home </a><i class="zmdi zmdi-arrow-right"></i></li>
									<li>blog details</li>
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
<!-- Start Our Blog Area -->
<?php
	$blog = Blog::findOrFail($id);
	$user = User::findOrFail($blog->id);
?>
<section class="blog-details-wrap ptb-100 bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
				<div class="blog-details-left-sidebar">
					<div class="blog-details-top">
						<!--Start Blog Thumb -->
						<div class="blog-details-thumb-wrap">
							<div class="blog-details-thumb">
								<img src="{{ asset('frontend/img/blog/1.jpg') }}" alt="blog images">
							</div>
							<div class="upcoming-date">
								{{ Carbon::parse($blog->created_at)->format('d') }}<span class="upc-mth">{{ Carbon::parse($blog->created_at)->format('M Y') }}</span>
							</div>
						</div>
						<!--End Blog Thumb -->
						<h2>{{ $blog->title }}</h2>
						<div class="blog-admin-and-comment">
							<p>BY : <a href="#">{{ $user->name }}</a></p>
							<p class="separator"></p>
							{{-- <p>3 COMMENTS</p> --}}
						</div>
						<!-- Start Blog Pra -->
						<div class="blog-details-pra">
							{!! $blog->content !!}
						</div>
						<!-- End Blog Pra -->
						<!-- Start Blog Tags -->
						<div class="postandshare">
							<div class="post">
								<p>TAGS :</p>
							</div>
							<div class="blog-social-icon">
								<ul>
									<li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
									<li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
									<li><a href="#"><i class="zmdi zmdi-tumblr"></i></a></li>
									<li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
									<li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- End Blog Tags -->
						<!-- Start Blog Comment Area -->
						<div class="our-blog-comment mt-10">
							<div class="blog-comment-inner">
								<h2 class="section-title-2">COMMENTS</h2>
								<!-- Start Single Comment -->
								<div id="disqus_thread"></div>
								<!-- End Single Comment -->
							</div>
						</div>
						<!-- End Blog Comment Area -->
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 sm-mt-30 xs-mt-40">
				<div class="blod-details-right-sidebar">
					
					<!-- Start Tag -->
					<div class="our-blog-tag">
						<h2 class="section-title-2">TAGS</h2>
						<ul class="tag-menu mt-40">
							<?php
							$str = $blog->content;

							preg_match_all('/#(\w+)/', $str, $matches);
							?>
							@foreach($matches[1] as $hashtag)
							<li><a href="#">{{ $hashtag }}</a></li>

							@endforeach
						</ul>
					</div>
					<!-- End Tag -->
					<!-- Start Letaest Blog Area -->
					<div class="our-recent-post mt-60">
						<h2 class="section-title-2">LATEST POST</h2>
						<div class="our-recent-post-wrap">
							<?php
								$recent_blog = Blog::get();
							?>
							@foreach($recent_blog as $row)
							<!-- Start Single Post -->
							<div class="single-recent-post">
								<div class="recent-thumb">
									<a href="blog-details.html"><img src="{{ asset($row->image) }}" alt="post images"></a>
								</div>
								<div class="recent-details">
									<div class="recent-post-dtl">
										<a href="#">{{ Str::limit($row->title, 30) }}</a>
									</div>
									<div class="recent-post-time">
										<p>{{ Carbon::parse($row->created_at)->format('d M Y') }}</p>
										<p class="separator">|</p>
										<p>{{ Carbon::parse($row->created_at)->format('h : i A') }}</p>
									</div>
								</div>
							</div>
							<!-- End Single Post -->
							@endforeach
						</div>
					</div>
					<!-- End Letaest Blog Area -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Our Blog Area -->
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://cahaya-bangunan.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection
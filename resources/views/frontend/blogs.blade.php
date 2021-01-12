@extends('layouts.frontend.app')
@section('content')
<?php
	use App\Models\Blog;                
?>
	<!-- Banner Area Start -->
	<div class="banner-area-wrapper about">
		<div class="banner-area text-center" style="background: url({{ Setting('about-banner')->file }});">	
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="banner-content-wrapper">
							<div class="banner-content">
								<h2>Blog</h2> 
								<div class="banner-breadcrumb">
									<ul>
										<li><a href="/">home </a><i class="zmdi zmdi-arrow-right"></i></li>
										<li>Blog Page</li>
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
	<!-- blog area start -->
    <div id="blog" class="blog-area three text-center  mb-100 pt-90 pb-100" style="background-image: url({{ asset(Setting('blog-background')->file) }})">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="blog-title text-center">
                        <h3>Blog Berita Terbaru</h3>
                        <p>{{ Setting('blog-description')->content }}</p>
                    </div>    
                </div>
                <?php
                	$blogs = Blog::get();
                ?>
                @foreach($blogs as $blog)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <a href="{{ route('..blog', $blog->id) }}"><img src="{{ asset($blog->image) }}" alt="blog"></a>
                            <div class="blog-hover">
                                <a href="{{ route('..blog', $blog->id) }}"><i class="ti-link"></i></a>
                            </div>
                        </div>
                        <div class="single-blog-content text-left">
                            <h3><a href="{{ route('..blog', $blog->id) }}">{{ Str::limit($blog->title, 30) }}</a></h3>
                            <p>{{ Str::limit($blog->content, 100) }}</p>
                            <ul>
                                <li><i class="ti-world"></i>
                                    <?php
                                    $str = $blog->content;

                                    preg_match_all('/#(\w+)/', $str, $matches);
                                    ?>
                                    @foreach($matches[1] as $hashtag)
                                    #{{ $hashtag }}
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> 
        </div>
    </div>
    <!-- Blog area end -->

@endsection
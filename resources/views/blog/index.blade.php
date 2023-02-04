@extends('layouts.app')

@section('content')
    <div id="blog">
        <div>
            <div class="container pageTitle">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h2 class="page-title">Blog</h2>
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-6 text-right">
                        <span class="page-location">Home / Blog</span>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.parallax-overlay -->
    </div> <!-- /.pageTitle -->

    <div class="container text-center pt-15 pb-5 ">
        <h1 class="text-6xl font-bold">All Posts</h1>

    </div>
    @if (Auth::check())
        <div class="container">

            <div class="col-md-12">
                <a href="/blog/create" class="main-button accent-color">addition<i
                        class="icon-button fa fa-arrow-right"></i></a>
            </div> <!-- /.col-md-12 -->
            <!-- /.row -->
        </div> <!-- /.container -->
    @endif





    <div class="container">
        <div class="row">

            <div class="col-md-8 blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($posts as $post)
                            <div class="post-blog">
                                <div class="blog-image">
                                    <a href="blog-single.html">
                                        <img src="/image_path/{{ $post->image_path }}" alt="">
                                    </a>
                                </div> <!-- /.blog-image -->

                                <div class="blog-content">
                                    <span class="meta-date">{{ $post->user->name }}</span>
                                    <span class="meta-comments">{{ date('d-m-Y', strtotime($post->updated_at)) }}</span>
                                    <h3><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
                                    <p class="light-text"> {{ $post->description }}<a
                                            href="/blog/{{ $post->slug }}">Continue Reading...</a></p>
                                </div>
                                <!-- /.blog-content -->
                            </div>
                        @endforeach
                        {{-- {{ $post->links() }}  --}}
                        {{-- {!! $posts->appends(request()->input())->links() !!}<!-- /.post-blog --> --}}
                    </div> <!-- /.col-md-12 -->
                    <div class="col-md-12">
                        <ul class="pages">
                            {!! $posts->appends(request()->input())->links() !!}
                        </ul>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="sidebar">

                    <div class="sidebar-widget">
                        <h5 class="widget-title">Recent Posts</h5>
                        @foreach ($posts as $post)
                            <div class="last-post clearfix">
                                <div class="thumb pull-left">
                                    <a href="/blog/{{ $post->slug }}"><img src="images/includes/blogthumb1.jpg"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <span>{{ date('d-m-Y', strtotime($post->updated_at)) }}</span>
                                    <h4><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                                </div>
                            </div> <!-- /.last-post -->
                        @endforeach
                    </div> <!-- /.sidebar-widget -->
                    {{-- <div class="sidebar-widget">
						<h5 class="widget-title">Categories</h5>
						<div class="row categories">
							<div class="col-md-6">
								<ul>
									<li><a href="#">Standard</a></li>
									<li><a href="#">Audio</a></li>
									<li><a href="#">Video</a></li>
									<li><a href="#">Branding</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
									<li><a href="#">iOS Design</a></li>
									<li><a href="#">Business</a></li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.sidebar-widget --> --}}
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Flickr Feed</h5>
                        <ul id="flickr-feed" class="thumbs"></ul>
                    </div> <!-- /.sidebar-widget -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Text Widget</h5>
                        <p class="light-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                            fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient…
                        </p>
                    </div> <!-- /.sidebar-widget -->
                </div> <!-- /.sidebar -->
            </div> <!-- /.col-md-4 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
@endsection

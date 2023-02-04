@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('app.css') }}">
@endsection
@section('content')

	<section id="homeIntro" >
	    <div class="parallax-overlay">
		    <div class="container home-intro-content">
		        <div class="row">
		        	<div class="col-md-12">
		        		<h2>welcome blogger</h2>
		        		<p><br> </p>
		        		<a href="/" class="large-button white-color">welcome</a>
		        	</div> <!-- /.col-md-12 -->
		        </div> <!-- /.row -->
		    </div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#homeIntro -->

	<section class="light-content services">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-umbrella fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Easy Theme Colors</h3>
							<p>There are 4 color themes (blue, green, red, orange) and this one is orange.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-mobile-phone fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Change Icons</h3>
							<p>Check <a rel="nofollow" href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a> for your suitable icons. Example: &lt;i class=&quot;fa fa-download&quot;&gt;&lt;/i&gt;</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-pencil-square-o fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Pixel Perfect Design</h3>
							<p>Based on a 12 column grid system, with every pixel snapped.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

			</div>

			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-code fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Valid HTML5</h3>
							<p>We offer validated html files and well commented code on our themes.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-eye-slash fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Retina Ready</h3>
							<p>Incredibly clean design provides you powerful way to grow your business.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-suitcase fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Special Thanks</h3>
							<p>Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_blank">Unsplash</a> for images used in this template.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.services -->

	<section class="light-content our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="section-title">Meet our happy staff</h2>
						<p class="section-desc">Medigo is the automated way to keep track of what everyone is working on.</p>
					</div> <!-- /.section-header -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
		<div class="team-members">
			<div class="container">
				<div class="row">

					<div class="col-md-4 col-sm-4">
						<div class="team-member">
							<div class="thumb-post">
								<img src="images/includes/member1.jpg" alt="">
								<span class="member-role">Marketing Manager</span>
							</div>
							<div class="member-content">
								<h4 class="member-name">Amy Groovy</h4>
								<p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
							</div>
						</div> <!-- /.team-member -->
					</div> <!-- /.col-md-4 -->

					<div class="col-md-4 col-sm-4">
						<div class="team-member">
							<div class="thumb-post">
								<img src="images/includes/member2.jpg" alt="">
								<span class="member-role">Web Developer</span>
							</div>
							<div class="member-content">
								<h4 class="member-name">Candy Sharp</h4>
								<p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
							</div>
						</div> <!-- /.team-member -->
					</div> <!-- /.col-md-4 -->

					<div class="col-md-4 col-sm-4">
						<div class="team-member">
							<div class="thumb-post">
								<img src="images/includes/member3.jpg" alt="">
								<span class="member-role">Graphic Designer</span>
							</div>
							<div class="member-content">
								<h4 class="member-name">Linda Master</h4>
								<p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
							</div>
						</div> <!-- /.team-member -->
					</div> <!-- /.col-md-4 -->

				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.team-members -->
	</section>
    <section id="blogPosts" class="parallax">
	    <div class="parallax-overlay">
		    <div class="container">
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="section-header">
							<h2 class="section-title">Recent from our blog</h2>
							<p class="section-desc">Everything you need to create a professional website.</p>
						</div> <!-- /.section-header -->
		        	</div> <!-- /.col-md-12 -->
		        </div> <!-- /.row -->
		        <div class="row latest-posts">
		        	<div class="col-md-4 col-sm-6">
		        		<div class="blog-post clearfix">
		        			<div class="thumb-post">
		        				<a href="blog-single.html"><img src="images/includes/blogthumb1.jpg" alt="" class="img-circle"></a>
		        			</div>
		        			<div class="blog-post-content">
		        				<h4 class="post-title"><a href="blog-single.html">Getting Creative With the Google Maps API</a></h4>
		        				<span class="meta-post-date">12 February 2084</span>
		        			</div>
		        		</div> <!-- /.blog-post -->
		        	</div> <!-- /.col-md-4 -->
		        	<div class="col-md-4 col-sm-6">
		        		<div class="blog-post clearfix">
		        			<div class="thumb-post">
		        				<a href="blog-single.html"><img src="images/includes/blogthumb2.jpg" alt="" class="img-circle"></a>
		        			</div>
		        			<div class="blog-post-content">
		        				<h4 class="post-title"><a href="blog-single.html">Design Deliverables – easily share project</a></h4>
		        				<span class="meta-post-date">10 February 2084</span>
		        			</div>
		        		</div> <!-- /.blog-post -->
		        	</div> <!-- /.col-md-4 -->
		        	<div class="col-md-4 col-sm-6">
		        		<div class="blog-post clearfix">
		        			<div class="thumb-post">
		        				<a href="blog-single.html"><img src="images/includes/blogthumb3.jpg" alt="" class="img-circle"></a>
		        			</div>
		        			<div class="blog-post-content">
		        				<h4 class="post-title"><a href="blog-single.html">Using Templates to Get Your Clients Thinking</a></h4>
		        				<span class="meta-post-date">8 February 2084</span>
		        			</div>
		        		</div> <!-- /.blog-post -->
		        	</div> <!-- /.col-md-4 -->
		        </div> <!-- /.row -->
		    </div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#blogPosts -->

</div>

@endsection

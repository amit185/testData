<!DOCTYPE html>
<html lang="en">
<head>
<title>Bluesky</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('front_end/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('front_end/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('front_end/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front_end/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front_end/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front_end/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front_end/styles/responsive.css')}}">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#"><img src="{{ asset('front_end/images/logo.png')}}" alt=""></a>
						</div>
						<nav class="main_nav">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								
							</ul>
						</nav>
						<div class=" ml-auto">
							<nav >
								<ul class="d-flex text-light" style="text-decoration: none;color:white!important">
									<li class="text-light"><a href="index.html" class="text-light">Contact Us</a></li>
									<li class=""><a class="text-light mx-3" href="index.html">Login</a></li>
									<li class=""><a class="text-light" href="index.html">Register</a></li>
									
								</ul>
							</nav>
							
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="#">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="{{ asset('front_end/images/logo.png')}}" alt=""></div></div>
					</div>
				</a>
			</div>
			<ul>
				<li class="menu_item"><a href="index.html">Home</a></li>
				
				<li class="menu_item"><a href="contact.html">Contact</a></li>
				<li class="menu_item"><a href="contact.html">Login</a></li>
				<li class="menu_item"><a href="contact.html">Register</a></li>
			</ul>
		</div>
		{{-- <div class="menu_phone"><span>call us: </span>652 345 3222 11</div> --}}
	</div>
	
	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('front_end/images/home_slider_1.jpg')}})"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										{{-- <div class="home_subtitle">super offer</div> --}}
										<div class="home_title">Villa with sea view</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('front_end/images/home_slider_1.jpg')}})"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										{{-- <div class="home_subtitle">super offer</div> --}}
										<div class="home_title">Villa with sea view</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('front_end/images/home_slider_1.jpg')}})"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										{{-- <div class="home_subtitle">super offer</div> --}}
										<div class="home_title">Villa with sea view</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('front_end/images/home_slider_1.jpg')}})"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										{{-- <div class="home_subtitle">super offer</div> --}}
										<div class="home_title">Villa with sea view</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('front_end/images/home_slider_1.jpg')}})"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										{{-- <div class="home_subtitle">super offer</div> --}}
										<div class="home_title">Villa with sea view</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<footer class="footer">
		
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-row align-items-center justify-content-start owl-prev">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy; 2022;</script> All rights reserved 
							</div>
							<div class="footer_nav">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="properties.html">Properties</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							{{-- <div class="footer_phone ml-auto"><span>call us: </span>652 345 3222 11</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{ asset('front_end/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('front_end/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('front_end/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('front_end/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('front_end/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('front_end/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{ asset('front_end/js/custom.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Sharina World</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!---Font Awesome Icons---->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!---Custom Stylesheet--->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_assets/css/mystyle.css')}}">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/reset.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	@yield('css')
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Header -->
	@include('Front.home.layouts.homeHeader')
	<!--/ End Header -->
	@yield('content')
	<!-- Start Footer Area -->
	@include('Front.home.layouts.homeFooter')
	<!-- /End Footer Area -->
	{{ \TawkTo::widgetCode() }}
	<!-- Jquery -->
    <script src="{{ asset('frontend_assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{ asset('frontend_assets/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('frontend_assets/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('frontend_assets/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{ asset('frontend_assets/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('frontend_assets/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('frontend_assets/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('frontend_assets/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('frontend_assets/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('frontend_assets/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('frontend_assets/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('frontend_assets/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('frontend_assets/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('frontend_assets/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('frontend_assets/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{ asset('frontend_assets/js/active.js')}}"></script>
	<!-- Active JS -->
	<script src="{{ asset('frontend_assets/js/ajax.js')}}"></script>
</body>
</html>
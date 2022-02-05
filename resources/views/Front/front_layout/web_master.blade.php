<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Sharina World</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('frontend_assets/images/favicon.png')}}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
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
	@include('Front.front_layout.partials.header')
	<!--/ End Header -->

	@yield('content')

	<!-- Start Footer Area -->
	@include('Front.front_layout.partials.footer')	
	<!-- /End Footer Area -->


<!-- Jquery -->
    <script src="{{asset('frontend_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/jquery-migrate-3.0.0.js')}}"></script>
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
	<!-- Fancybox JS -->
	<script src="{{ asset('frontend_assets/js/facnybox.min.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('frontend_assets/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('frontend_assets/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('frontend_assets/js/nicesellect.js')}}"></script>
	<!-- Ytplayer JS -->
	<script src="{{ asset('frontend_assets/js/ytplayer.min.js')}}"></script>
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
</body>
</html>
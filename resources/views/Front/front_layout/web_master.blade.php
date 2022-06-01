<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">

    	.rating { 
			  border: none;
			  margin:0px;
			  margin-bottom: 18px;
			  float: left;
			}

			.rating > input { display: none; } 

			.rating.star > label {
			    color: #78e2fb;
			    margin: 1px 20px 0px 0px;
			    background-color: #ffffff;
			    border-radius: 0;
			    height: 48px;
			    float: right;
			    width: 44px;
			    border: 1px solid #ffffff;
			}
			fieldset.rating.star > label:before { 
			    margin-top: 0;
			    padding: 0px;
			    font-size: 47px;
			    font-family: FontAwesome;
			    display: inline-block;
			    content: "\2605";
			    position: relative;
			    top: -9px;
			}
			.rating > label:before {
			    margin-top: 2px;
			    padding: 5px 12px;
			    font-size: 1.25em;
			    font-family: FontAwesome;
			    display: inline-block;
			    content: "";
			}
			.rating > .half:before { 
			  content: "\f089";
			  position: absolute;
			}
			.rating.star > label{
			  background-color: transparent !important;
			}
			.rating > label { 
			    color: #fff;
			    margin: 1px 11px 0px 0px;
			    background-color: #78e2fb;
			    border-radius: 2px;
			    height: 16px;
			    float: right;
			    width: 16px;
			    border: 1px solid #c1c0c0;  
			}

			/***** CSS Magic to Highlight Stars on Hover *****/

			.rating:not(:checked) > label:hover, /* hover current star */
			.rating:not(:checked) > label:hover ~ label { 
				background-color:red!important;
			  cursor:pointer;
			} /* hover previous stars in list */

			.rating > input:checked + label:hover, /* hover current star when changing rating */
			.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
			.rating > input:checked ~ label:hover ~ label { 
				background-color:red!important;
			  cursor:pointer;
			} 
			.rating.star:not(:checked) > label:hover, /* hover current star */
			.rating.star:not(:checked) > label:hover ~ label { 
			  color:red!important;
			  background-color: transparent !important;
			  cursor:pointer;
			} /* hover previous stars in list */

			.rating.star > input:checked + label:hover, /* hover current star when changing rating.star */
			.rating.star > label:hover ~ input:checked ~ label, /* lighten current selection */
			.rating.star > input:checked ~ label:hover ~ label { 
			  color:red!important;
			  cursor:pointer;
			  background-color: transparent !important;
			} 
			.star_rating{
			        width: 500px;
			    margin: 0 auto;
			    border: 1px solid #ff0000;
			    padding: 3px 30px 72px 35px;
			    box-shadow: 0 0 15px red;
			    margin-top: 2%;
			    border-radius: 14px;
			}
			.star_rating h2 {
			  font-size: 27px;
			  text-transform: uppercase;
			}
			.star_rating p {
			  font-size: 17px;
			  color: #78e2fb;
			  clear: both;
			  margin-bottom: 3px;
			}
			.star_rating h4 {
			    font-size: 17px;
			    color: #78e2fb;
			    clear: both;
			    margin-bottom: 3px;
			    border-top: 2px solid red;
			    padding-top: 16px;
			    text-align: center;
			}
			
			@media screen and (max-width: 500px){
			  .star_rating {
			    width: 100%;
			    padding: 3px 8px 72px 6px;
			  }
			  .rating.star {
			    margin: 0 auto;
			    display: block;
			    text-align: center;
			    float: none;
			  }
			  .rating.star > label {
			    margin: 1px;
			    width: 19%;
			  }
			}

		a {
			text-decoration: none !important;
			color: inherit;
		}

		a:hover {
			color: #455A64;
		}

		.rate {
			border-radius: 5px;
			background-color: #fff;
			padding-left: 60px;
			padding-right: 60px;
			margin-top: 30px;
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.rating-box {
			width: 130px;
			height: 130px;
			margin-right: auto;
			margin-left: auto;
			background-color: #FBC02D;
			color: #fff;
		}

		.rating-label {
			font-weight: bold;
		}

		/* Rating bar width */
		.rating-bar {
			width: 300px;
			padding: 8px;
			border-radius: 5px;
		}

		/* The bar container */
		.bar-container {
		  width: 100%;
		  background-color: #f1f1f1;
		  text-align: center;
		  color: white;
		  border-radius: 20px;
		  cursor: pointer;
		  margin-bottom: 5px;
		}

		/* Individual bars */
		.bar-5 {
			width: 70%;
			height: 13px;
			background-color: #FBC02D; 
			border-radius: 20px;

		}
		.bar-4 {
			width: 30%;
			height: 13px;
			background-color: #FBC02D; 
			border-radius: 20px;

		}
		.bar-3 {
			width: 20%;
			height: 13px;
			background-color: #FBC02D; 
			border-radius: 20px;

		}
		.bar-2 {
			width: 10%;
			height: 13px;
			background-color: #FBC02D; 
			border-radius: 20px;

		}
		.bar-1 {
			width: 0%;
			height: 13px;
			background-color: #FBC02D; 
			border-radius: 20px;

		}

		td {
			padding-bottom: 10px;
		}

		.star-active {
			color: #FBC02D;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.star-active:hover {
			color: #F9A825;
			cursor: pointer;
		}

		.star-inactive {
			color: #CFD8DC;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.blue-text {
			color: #0091EA;
		}

		.content {
			font-size: 18px;
		}

		.profile-pic {
			width: 90px;
			height: 90px;
			border-radius: 100%;
			margin-right: 30px;
		}
		 
		.pic {
			width: 80px;
			height: 80px;
			margin-right: 10px;
		}

		.vote {
			cursor: pointer;
		}

		
    </style>
@yield('css')
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<!-- <div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div> -->
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

	<script type="text/javascript">
			$("label").click(function(){
	  $(this).parent().find("label").css({"background-color": "#78e2fb"});
	  $(this).css({"background-color": "red"});
	  $(this).nextAll().css({"background-color": "red"});
	});
	$(".star label").click(function(){
	  $(this).parent().find("label").css({"color": "#78e2fb"});
	  $(this).css({"color": "red"});
	  $(this).nextAll().css({"color": "red"});
	  $(this).css({"background-color": "transparent"});
	  $(this).nextAll().css({"background-color": "transparent"});
	});
	</script>

<script type="text/javascript">

$("#submit-review").click(function(){

	
	var serviceId = $("#service").attr('data-service-id');

	var review = $("#review-text").val();



	if (review != "") {

		if ($('input[name=rating]:checked').length > 0) {


			var star = $('input[name=rating]:checked').val();

	

			$.ajax({

				url: '/member/review',
				method: 'POST',
				data: {

					'_token': $('meta[name="csrf-token"]').attr('content'),
					'service_id': serviceId,
					'review':review,
					'star': star,


				},

				success: function(data){				
					$('#msg').text('');
					$('#msg').append(data.result);
					$("#review-text").val('');
					$('input[name=rating]:checked').removeAttr("checked");

					
				},

				error: function(data){

					alert("failed");
				}

			});
    

		}

		else{

			alert('please star');
		}

 	
		

	}

	else{

		$('#msg').text('');
		var msg = 'Please fill the form';
		$('#msg').append(msg);
	}
	
	
});

</script>
</body>
</html>
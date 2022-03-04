@extends('Front.front_layout.web_master')
@section('content')

<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Checkout -->
		<section class="blog-single shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									<div class="blog-detail">
										<h2 class="blog-title">{{$service->title}}</h2>
									</div>
									<div class="blog-meta">
										<span class="author">
											<a href="#"><i class="fa fa-user"></i>{{$user->f_name}} {{$user->l_name}}</a>
											<a href="#"><i class="fa fa-umbrella"></i>Jobs Completed (10)</a>
											<a href="#"><i class="fa fa-star"></i>Star Rating (4.5)</a>
										</span>
									</div>
									
									<!---div style="object-fit: cover; max-width: 100%; max-height: 500px"---->
										<!-----img src="images/single-service.jpg" alt="#">
									<--/div---->
									<!------------Start----------->
									<div class="column">
										<img id="featured" src="{{ asset('storage/media/'.$service->featured_img)}}">
											<!-- <div id="slide-wrapper">
												<img id="slideLeft" class="arrow" src="images/arrow-left.png">

												<div id="slider">
													<img class="thumbnail active" src="{{ asset('storage/media/'.$service->featured_img)}}">
													<img class="thumbnail" src="{{ asset('storage/media/'.$service->featured_img)}}">
													<img class="thumbnail" src="{{ asset('storage/media/'.$service->featured_img)}}">
													<img class="thumbnail" src="{{ asset('storage/media/'.$service->featured_img)}}">


												</div>
											    <img id="slideRight" class="arrow" src="images/arrow-right.png">
											</div> -->
										
									</div>
									<!------------End------------->
									<br>
									<div class="blog-detail">
										<div class="content">
											@php
												echo $service->description
											@endphp
											
										</div>
									</div>
									<div class="share-social">
										<div class="row">
											<div class="col-12">
												<div class="content-tags">
													<h4>Tags:</h4>
													<ul class="tag-inner">
														<li><a href="#">How it works</a></li>
														<li><a href="#">Business Plan</a></li>
														<li><a href="#">Service Search</a></li>
														<li><a href="#">Sharina World</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							@foreach($service_package as $key=>$list)
							<h3 style="padding: 15px 5px 5px 15px; background-color: #FFC107; color:white; border-radius: 4px">{{$list->package_type}}</h3>
							<div class="single-widget">
								
								<div class="content">
									<ul>
										@foreach($list->package_attrs as $val=>$attr)
										 <li>{{$attr->plan_name}}<span> ${{$attr->price}}.0</span></li>
										@endforeach
									</ul>
								</div>
							</div>
							@endforeach
							<!--/ End Order Widget -->
							
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<a href="#" class="btn">Contact Provider</a>
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->

		<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('click', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		});


</script>
@endsection
@extends('Front.home.layouts.homeMaster')
@section('content')	
	

	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span>Trusted and Quality </span>Service Providers</h1>
										<p>Register you Business or Service with Sharina World to get <br>50% More Exposure.</p>
										<div class="button">
											<a href="#" class="btn">Regsiter Now!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('frontend_assets/images/top-rated-business.jpg')}}" alt="#">
						<div class="content">
							<p><span style="background-color:black; padding: 6px; font-size: 15px;">Top Rated</span></p>
							<h3>Explore BEST<br> Posts</h3>
							<a href="{{route('front.blog')}}">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('frontend_assets/images/featured-business.jpg')}}" alt="#">
						<div class="content">
							<p><span style="background-color:black; padding: 6px; font-size: 15px;">Featured</span></p>
							<h3>Get yourself featured for<br> more EXPOSURE </h3>
							<a href="#">Get Featured</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="{{ asset('frontend_assets/images/new-arrivals.jpg')}}" alt="#">
						<div class="content">
							<p><span style="background-color:black; padding: 6px; font-size: 15px;">New Arrivals</span></p>
							<h3>Explore New Business<br> and Service</h3>
							<a href="{{route('front.service.all')}}">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Providers</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
									@foreach($category as $key=>$list)
									  @if($key==0)
									  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#cleaning-services" role="tab">{{$list->name}}</a></li>
									  @else
									  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cleaning-services" role="tab">{{$list->name}}</a></li>
									  @endif
									@endforeach
								</ul> -->
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="cleaning-services" role="tabpanel">
									<div class="tab-single">
										<div class="row">
										@foreach($service as $key=>$val)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}">
															<img class="default-img front_service_img" src="{{ asset('storage/media/'.$val->featured_img)}}" alt="#">
															<img class="hover-img front_service_img" src="{{ asset('storage/media/'.$val->featured_img)}}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}"><i class=" ti-eye"></i><span>View Now</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Favourite</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Compare with Similar</span></a> -->
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}">Contact Provider</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}">{{$val->title}}</a></h3>
														<div class="product-price">
															<span>@php 

																$package = \App\Models\ServicePackage::where('service_id', $val->id)->first();

																$package_attr = \App\Models\ServicePackageAttr::where('service_package_id', $package->id)->min('price');
																if($package_attr){
																	echo  '<strong class="py-2">Starts From <span style="font-family: inherit;background-color: #f7941d;padding: 3px 4px 3px 4px;color: white;border-radius: 5px;">$'.$package_attr . '</span></strong>';
																}
																

																@endphp


															</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('frontend_assets/images/New-services-providers.jpg')}}" alt="#">
						<div class="content">
							<p>New Arrivals</p>
							<h3>Reliables Professionals in your <br>Area<span> Get Upto 50% OFF</span></h3>
							<a href="{{route('front.service.all')}}">Explore Now!</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('frontend_assets/images/new-companies.jpg')}}" alt="#">
						<div class="content">
							<p>New Arrivals</p>
							<h3>Check Out Best Companies <br> & <span>Get Upto 20%</span></h3>
							<a href="{{route('front.service.all')}}" class="btn">Explore Now!</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<!-- Start Hot Services -->
	<div class="product-area most-popular section2">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Top Services</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						@foreach($service as $key=>$val)
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="default-img front_service_slide_img" src="{{ asset('storage/media/'.$val->featured_img)}}" alt="#">
									<img class="hover-img front_service_slide_img" src="{{ asset('storage/media/'.$val->featured_img)}}" alt="#">
									<span class="new">New Arrival</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}"><i class=" ti-eye"></i><span>View Now</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Favourite</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Compare with others</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}">Contact Provider</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}">{{$val->title}}</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									@php 

										$package = \App\Models\ServicePackage::where('service_id', $val->id)->first();

										$package_attr = \App\Models\ServicePackageAttr::where('service_package_id', $package->id)->min('price');
										if($package_attr){
										echo  '<strong class="py-2">Starts From <span style="font-family: inherit;background-color: #f7941d;padding: 3px 4px 3px 4px;color: white;border-radius: 5px;">$'.$package_attr . '</span></strong>';
										}
									@endphp
								</div>
							</div>
						</div>
						@endforeach
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Hot Services -->
	<!-- Start Hot Business -->
	<div class="product-area most-popular section1">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Businesses</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						@foreach($service as $key=>$val)
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="default-img front_service_slide_img" src="{{ asset('storage/media/'.$val->featured_img)}}" alt="#">
									<img class="hover-img front_service_slide_img" src="{{ asset('storage/media/'.$val->featured_img)}}" alt="#">
									<!-- <span class="out-of-stock">Hot</span> -->
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}"><i class=" ti-eye"></i><span>View Now</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Favourite</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Compare with others</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}">Contact Provider</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="{{url('user')}}/{{$val->user->username}}/{{$val->slug}}">{{$val->title}}</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									@php 

										$package = \App\Models\ServicePackage::where('service_id', $val->id)->first();

										$package_attr = \App\Models\ServicePackageAttr::where('service_package_id', $package->id)->min('price');
										if($package_attr){
										echo  '<strong class="py-2">Starts From <span style="font-family: inherit;background-color: #f7941d;padding: 3px 4px 3px 4px;color: white;border-radius: 5px;">$'.$package_attr . '</span></strong>';
										}
									@endphp
								</div>
							</div>
						</div>
						@endforeach
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Hot Business -->
	<section class="section free-version-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-xs-12">
                    <div class="section-title mb-60">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">A Consolidated & Trusted Place for Everyone</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Get Register with Sharina World<br> to Give your Business a New Elevation</h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Unlock your full potantial, connect with right customers, grown your sales,<br> and build trust.</p>

                        <div class="button">
                            <a href="{{ route('register') }}" target="_blank" class="btn wow fadeInUp" data-wow-delay=".8s">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
	
	<!-- Start Shop Blog  -->
	<section class="shop-blog section1">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>From Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($recent_posts as $key=>$list)
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->	
					<div class="shop-single-blog">
						<img style="object-fit: cover; width:370px; height:300px" src="{{ asset('storage/media/'.$list->post_image)}}" alt="#">
						<div class="content">
							<p class="date">{{$list->created_at}}</p>
							<a href="{{url('blog/')}}/{{$list->slug}}" class="title">{{$list->title}}</a>
							<a href="{{url('blog/')}}/{{$list->slug}}" class="more-btn">Continue Reading</a>
						</div>
					</div>
				</div>	<!-- End Single Blog  -->
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Shop Blog  -->
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free Registeration</h4>
						<p>Creat Free Accounts</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Connect</h4>
						<p>Direct Access to Providers</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Reliability</h4>
						<p>No Hidden Charges</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Price</h4>
						<p>Affordable price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>Notified</span> about new Service Providers</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	

@endsection
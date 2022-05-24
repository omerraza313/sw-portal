<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +1 516-464-7444</li>
								<li><i class="ti-email"></i> app@sharinaworld.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-7 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
								<li><i class="ti-user"></i> <a href="{{route('home')}}">My account</a></li>
								@guest
								@if (Route::has('login'))
								<li><i class="ti-power-off"></i><a href="{{url('/login')}}">Login</a></li>
								@endif
								@else
								<li>{{ Auth::user()->username }}</li>
								<li><a class="btn btn-warning text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
								@endguest
							</ul>
	
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="{{route('front.home')}}"><img src="{{ asset('frontend_assets/images/Sharina-Logo.png')}}" alt="logo" style="height: 65px; width: auto; margin-top: -15px"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<form method="GET" action="{{url('/search')}}">
									
									<input name="query" placeholder="Search Here....." type="search">
									<button class="btnn" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="{{ url('member/favourites')}}" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									<li><a href="#">Business Categories <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($category as $key=>$list)
											<li><a href="{{url('category/')}}/{{$list->slug}}">{{$list->name}}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="#">Service Categories <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($category as $key=>$list)
											<li><a href="{{url('category/')}}/{{$list->slug}}">{{$list->name}}</a></li>
											@endforeach
										</ul>
									</li>
									<!-- <li class="main-mega"><a href="#">Featured <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<a href="#" class="title-link">Explore Now</a>
												<div class="image">
													<img src="{{ asset('frontend_assets/images/home-cleaning.jpg')}}" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Home Cleaning</a>
													<a href="#">Office Cleaning</a>
													<a href="#">Pool Cleaning</a>
													<a href="#">After-Party Cleaning</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Explore Now</a>
												<div class="image">
													<img src="{{ asset('frontend_assets/images/locksmith.jpg')}}" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Lock Smith</a>
													<a href="#">Electrician</a>
													<a href="#">Carpentar</a>
													<a href="#">Professional Mover</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Explore Now</a>
												<div class="image">
													<img src="{{ asset('frontend_assets/images/home-cleaning.jpg')}}" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Home Cleaning</a>
													<a href="#">Office Cleaning</a>
													<a href="#">Pool Cleaning</a>
													<a href="#">After-Party Cleaning</a>
												</div>
											</li>
										</ul>
									</li> -->
									@foreach($category as $key=>$list)
											<li><a href="{{url('category/')}}/{{$list->slug}}">{{$list->name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="{{route('front.home')}}">Home</a></li>
													<li><a href="#">How it works?</a></li>												
													<li><a href="#">Get Featured</a></li>
																						
													<li><a href="{{route('front.service.all')}}">Services<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li>
																<a href="{{route('front.service.all')}}">Top Rated</a>
															</li>
															<li>
																<a href="{{route('front.service.all')}}">Feaured Businesses</a>
															</li>
														</ul>
													</li>
													<li><a href="{{route('front.blog')}}">Blog</a></li>
													<li><a href="{{route('front.contact')}}">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
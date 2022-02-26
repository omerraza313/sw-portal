@extends('Front.front_layout.web_master')
@section('content')
<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="#">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">Blog Single Sidebar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
			
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container-fluid px-5">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="blog-single-main">
							<div class="row">
								@foreach($blog_posts as $key=>$list)
								<div class="col-lg-4 col-md-4 mb-4">
									
						            <div class="card" style="box-shadow: 5px 7px 5px -1px rgba(199,189,189,0.75);">
						              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
						                <img src="{{ asset('storage/media/'.$list->post_image)}}" alt="{{$list->title}}" class="img-fluid rounded-top post_category_image" />
						                <a href="{{url('/blog/')}}/{{$list->slug}}">
						                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
						                </a>
						              </div>
						              <div class="card-body">
						                <h5 class="card-title"><a href="{{url('/blog/')}}/{{$list->slug}}">{{$list->title}}</a></h5>
						                <p class="card-text pb-2">
						                  Some quick example text to build on the card title and make up the bulk of the
						                  card's content.
						                </p>
						                <a href="{{url('/blog/')}}/{{$list->slug}}" class="btn btn-primary"><span class="text-white">Read</span></a>
						              </div>
						            </div>
						            
						        </div>
						        @endforeach
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<div class="form">
									<input type="email" placeholder="Search Here...">
									<a class="button" href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Blog Categories</h3>
								<ul class="categor-list">
									@foreach($blog_cat as $key=>$list)
									  <li>
									  	<a href="{{url('blog/category/')}}/{{$list->slug}}">{{$list->name}}</a>
									  </li>
									@endforeach
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post d-flex flex-column">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								@foreach($recent_posts as $key=>$list)
								<div class="single-post">
									<div class="image">
										<img src="{{ asset('storage/media/'.$list->post_image)}}" alt="{{$list->title}}">
									</div>
									<div class="content">
										<h5><a href="#">{{$list->title}}</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>{{$list->created_at}}</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
										</ul>
									</div>
								</div>
								@endforeach
								<!-- End Single Post -->
							
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!-- <div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
									<li><a href="#">business</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">html</a></li>
									<li><a href="#">multipurpose</a></li>
									<li><a href="#">education</a></li>
									<li><a href="#">template</a></li>
									<li><a href="#">Ecommerce</a></li>
								</ul>
							</div> -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget newsletter">
								<h3 class="title">Newsletter</h3>
								<div class="letter-inner">
									<h4>Subscribe & get news <br> latest updates.</h4>
									<div class="form-inner">
										<input type="email" placeholder="Enter your email">
										<a href="#">Submit</a>
									</div>
								</div>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blog Single -->


@endsection
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
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									
									<div class="blog-detail">
										<h2 class="blog-title">{{$single_post->title}}</h2>
										<div class="blog-meta">
											<span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>{{$single_post->created_at}}</a></span>
										</div>
										<div class="image">
										 <img src="{{ asset('storage/media/'.$single_post->post_image)}}" alt="#" class="post_featured_image">
									    </div>
									    <hr>
										<div class="content">
											{!! $single_post->body !!}
										</div>
									</div>
									<!-- <div class="share-social">
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
									</div> -->
								</div>			
							</div>
							<hr>
							<div class="card mt-5">
								<div class="card-header" style="background-color:#F7941D;">
									<h4 class="float-left text-white">Recent Comments</h4>
									<h4 class="float-right badge badge-primary">Total Comments : {{$single_post->approvedComments->count()}}</h4>
								</div>
								<div class="card-body">
									@foreach($single_post->approvedComments as $comment)
									<h5>{{$comment->comment}}</h5>
									<p>{{$comment->created_at}} <i> by</i> <strong>{{$comment->name}}</strong></p>
									<hr>
									@endforeach
								</div>
							</div>
							<div class="card mt-5 plr-3">
								<div class="card-header" style="background-color:#F7941D;">
									<h4 class="float-left text-white">Post A New Comment</h4>
									
								</div>
								<div class="card-body">
								<div class="row">
									<div class="col-6">
										<form method="Post" action="{{route('blog.comment.add')}}">
										@csrf	
										
										<input type="id" name="blog_id" value="{{$single_post->id}}" hidden>
										<div class="form-group">
											<label>Enter Your Name</label>
											<input type="text" name="name" class="form-control">
										</div>	
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Enter Your Email</label>
											<input type="email" name="email" class="form-control">
										</div>	
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Enter Your Comment</label>
											<textarea  name="comment" class="form-control"></textarea>
										</div>	
										<button type="submit" class="btn btn-primary">Post A comment</button>

										</form>
									</div>

								</div>
							</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
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
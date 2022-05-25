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
								<li class="active"><a href="#">Service</a></li>
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
										<h2 class="blog-title" id="service" data-service-id="{{$service->id}}">{{$service->title}}</h2>
									</div>
									<div class="blog-meta">
										<span class="author">
											<a href="{{ url('/profile/user/'.$user->username)}}"><i class="fa fa-user"></i>{{$user->username}}</a>
											<a href="#"><i class="fa fa-heart"></i>Favourites ({{$service->favourite->count()}})</a>
											<a href="#reviews"><i class="fa fa-star"></i>Total Reviews ({{$service->approvedReviews->count()}})</a>
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
										@if(Auth::id() != $service->user_id)
										<form method="post" action="{{route('chat.init')}}">
											@csrf
											<input type="id" name="reciever_id" value="{{$service->user_id}}" hidden>
											<button class="btn" type="submit">Contact <b>{{$service->user->f_name}}</b>	</button>
										</form>
										@endif
										
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>

						<div class="card card-primary card-outline mt-5">
			              <div class="card-body box-profile">
			                <div class="text-center p-4">
			                  <span style="font-size: 32px;background: #f2f1f1;padding: 16px 28px;border-radius: 101px;color: #989999;">{{ substr($user->username, 0, 1)}}</span>
			                </div>

			                <h3 class="profile-username text-center">{{$user->username}}</h3>

			                <p class="text-muted text-center mb-4">Software Engineer</p>

			                <ul class="list-group list-group-unbordered mb-4">
			                  <li class="list-group-item">
			                    <b>Reviews</b> <a class="float-right">10</a>
			                  </li>
			                  <li class="list-group-item">
			                    <b>Favourites</b> <a class="float-right">543</a>
			                  </li>
			                  <li class="list-group-item">
			                    <b>Services</b> <a class="float-right">2</a>
			                  </li>
			                </ul>

			                <a href="{{ url('/profile/user/'.$user->username)}}" class="btn btn-primary btn-block text-center text-white">Check Profile</a>
			              </div>
			              <!-- /.card-body -->
		            	</div>
					</div>
				</div>
			</div>
		<div class="container-fluid px-1 py-5 mx-auto">

	<div class="row justify-content-center">
		<div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
			<div class="card rate">
				<div class="row" id="post-review-box" style="display:block;">

					@if(auth()->check())
						@if(Auth::id() != $service->user_id)

							<div class="col-md-12">
                    <form>
                    	
                       
                        <textarea class="form-control animated" cols="50" id="review-text" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                        	<fieldset class="rating star mt-4">
								<input type="radio" id="field6_star5" name="rating" value="5" id="review-star"/><label class = "full" for="field6_star5"></label>
								<input type="radio" id="field6_star4" name="rating" value="4" /><label class = "full" for="field6_star4"></label>
								<input type="radio" id="field6_star3" name="rating" value="3" /><label class = "full" for="field6_star3"></label>
								<input type="radio" id="field6_star2" name="rating" value="2" /><label class = "full" for="field6_star2"></label>
								<input type="radio" id="field6_star1" name="rating" value="1" /><label class = "full" for="field6_star1"></label>
							</fieldset>	
        
                        <div class="text-right">
                           
							
                           
                            <a class="btn btn-success text-white mt-3" id="submit-review">Submit</a>
                           	<p id="msg"></p>
                        </div>
                    </form>
                </div>

						
						@endif
						
                

                	@else
                	Login First to Leave Feedback
                	<a href="{{url('login')}}" class="btn btn-success mt-3 text-white"> Login </a>
                	@endif
            </div>	
			</div>
		<!-- 	<div class="card">
				<div class="row justify-content-left d-flex">
					<div class="col-md-4 d-flex flex-column">
						<div class="rating-box">
							<h1 class="pt-4">4.0</h1>
							<p class="">out of 5</p>
						</div>
						<div>
							<span class="fa fa-star star-active mx-1"></span>
							<span class="fa fa-star star-active mx-1"></span>
							<span class="fa fa-star star-active mx-1"></span>
							<span class="fa fa-star star-active mx-1"></span>
							<span class="fa fa-star star-inactive mx-1"></span>
						</div>
					</div>
					<div class="col-md-8">
						<div class="rating-bar0 justify-content-center">
							<table class="text-left mx-auto">
								<tr>
									<td class="rating-label">Excellent</td>
									<td class="rating-bar">
										<div class="bar-container">
									      <div class="bar-5"></div>
									    </div>
									</td>
									<td class="text-right">123</td>
								</tr>
								<tr>
									<td class="rating-label">Good</td>
									<td class="rating-bar">
										<div class="bar-container">
									      <div class="bar-4"></div>
									    </div>
									</td>
									<td class="text-right">23</td>
								</tr>
								<tr>
									<td class="rating-label">Average</td>
									<td class="rating-bar">
										<div class="bar-container">
									      <div class="bar-3"></div>
									    </div>
									</td>
									<td class="text-right">10</td>
								</tr>
								<tr>
									<td class="rating-label">Poor</td>
									<td class="rating-bar">
										<div class="bar-container">
									      <div class="bar-2"></div>
									    </div>
									</td>
									<td class="text-right">3</td>
								</tr>
								<tr>
									<td class="rating-label">Terrible</td>
									<td class="rating-bar">
										<div class="bar-container">
									      <div class="bar-1"></div>
									    </div>
									</td>
									<td class="text-right">0</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div> -->

			@foreach($service->approvedReviews as $review)
			<div class="card rate" id="reviews">
				<div class="row d-flex">
					<div class="">
						<img class="profile-pic" src="https://i.imgur.com/V3ICjlm.jpg">
					</div>
					<div class="d-flex flex-column">
						<h3 class="mt-2 mb-0">{{$review->user->username}}</h3>
						<div>
							<p class="text-left"><span class="text-muted">{{$review->star}}</span>
							<span class="fa fa-star star-active ml-3"></span>
							<span class="fa fa-star star-active"></span>
							<span class="fa fa-star star-active"></span>
							<span class="fa fa-star star-active"></span>
							<span class="fa fa-star star-inactive"></span></p>
						</div>
					</div>
					<div class="ml-auto">
						<p class="text-muted pt-5 pt-sm-3">{{$review->created_at->format('d-m-y')}}</p>
					</div>
				</div>
				<div class="row text-left">
					
					<p class="content mt-4">"{{$review->review}}"</p>
				</div>
				
				<!-- <div class="row text-left mt-4">
					<div class="like mr-3 vote">
						<img src="https://i.imgur.com/mHSQOaX.png"><span class="blue-text pl-2">20</span>
					</div>
					<div class="unlike vote">
						<img src="https://i.imgur.com/bFBO3J7.png"><span class="text-muted pl-2">4</span>
					</div>
				</div> -->
			</div>
			@endforeach
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
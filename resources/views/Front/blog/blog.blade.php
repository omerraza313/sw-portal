@extends('Front.front_layout.web_master')
@section('content')
<!-- Start Shop Blog  -->
	<section class="shop-blog section1">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Blog</h2>
					</div>
				</div>
			</div>
			
				<div class="row">
					@foreach($blog as $key=>$list)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Blog  -->
						<div class="shop-single-blog">
							<img style="object-fit: cover; width: 370px; height: 300px;" src="{{ asset('storage/media/'.$list->post_image)}}" alt="{{$list->title}}">
							<div class="content">
								<p class="date">{{$list->updated_at}}</p>
								<a href="{{url('/blog')}}/{{$list->slug}}" class="title">{{$list->title}}</a>
								<a href="{{url('/blog')}}/{{$list->slug}}" class="more-btn">Continue Reading</a>
							</div>
						</div>
						<!-- End Single Blog  -->
					</div>
					@endforeach
				</div>
		</div>
	</section>
	<!-- End Shop Blog  -->
	@endsection
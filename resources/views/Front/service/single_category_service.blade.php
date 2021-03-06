@extends('Front.front_layout.web_master')
@section('content')


	<section class="shop-blog section1">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>{{$single_cat->name}}</h2>
					</div>
				</div>
			</div>
			
				<div class="row">
					@foreach($single_cat_service as $key=>$list)
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="shop-single-blog">
							<img style="object-fit: cover; width: 370px; height: 300px;" src="{{ asset('storage/media/'.$list->featured_img)}}" alt="#">
							<div class="content">
								 <p class="date"></p>
								<a href="{{url('user')}}/{{$list->user->username}}/{{$list->slug}}" class="title">{{$list->title}}</a>
								<a href="{{url('user')}}/{{$list->user->username}}/{{$list->slug}}" class="more-btn">View Details</a>
							</div>
						</div>
						
					</div>
					@endforeach
				</div>
		</div>
	</section>
	

@endsection	
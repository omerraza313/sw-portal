@extends('Front.front_layout.web_master')
@section('content')


	<section class="shop-blog section1">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="">
						<h2>Result For: {{$query}}</h2>
					</div>
				</div>
			</div>
			
				<div class="row">
					
					@foreach($data as $key=>$list)
					<div class="col-lg-4 col-md-6 col-12">
						
						<div class="shop-single-blog">
							<img style="object-fit: cover; width: 370px; height: 300px;" src="{{ asset('storage/media/'.$list->featured_img)}}" alt="#">
							<div class="content">
								 <p class="date"></p>
								<a href="#" class="title">{{$list->title}}</a>
								<a href="#" class="more-btn">View Details</a>
							</div>
						</div>
						
					</div>
					@endforeach
				    @if(Session::has('message'))
					<div class="col-12">
						<div class="section-title">
							<h3>{{ Session::get('message') }}</h3>
						</div>
					</div>
					@endif
				</div>
		</div>
	</section>

@endsection	
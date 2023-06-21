@extends('home-master')
@section('content') 

@include('top-bg-section')

<div class="container">
	<div class="pageTitleContainer">
		<div class="pageTitle">
			<h1>Title of the page</h1>
			<p><i>Lorem ipsum dolor sit amet, consectetur a</i></p>
		</div>
	</div>
</div>

{{-- next-1 --}}
<section>
	<div class="container about-introduction-section">
		@foreach($getabout as $about)
		<div class="row">
			<div class="col-lg-7">
				<h3>{{ $about->title }}</h3>
				
				{!! $about->description !!}
			</div>
			<div class="col-lg-5">
				<div class="about-image">
					<a href="{{url('about')}}"><img class="img-fluid" src="{{url('uploads/'.$about->image)}}"></a>
				</div>
			</div>
		</div>
		@endforeach
	</div>

	</section>
	{{-- next-2 --}}

	<section>
		
		<div class="container about-icons">
			<div class="our-services">
				<div class="row">
					<div class="col-lg-12">
						<h2>Our Core Service</h2></div>
					</div>
					
					@foreach($getservice as $service)
					<div class="row">
						<div class="col-lg-1">
							<div class="service">
								<i class="{{ $service->image }}"></i>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="service-info">
								<h3>{{ $service->title }}</h3>
								{!! $service->description !!}
							</div>
						</div>
					</div>
					@endforeach

			</div>
		</div>
				

</section> 


	@endsection
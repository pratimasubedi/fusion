
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
<div class="container fairhiring-part">
	
		@foreach($getfairhiring as $fairhiring)
		<div class=" fairhiring-column-1">
			<div class="fairhiring-image">
				<a href="{{url('/')}}"><img class="img-fluid" src="{{url('uploads/'.$fairhiring->image)}}"></a>
			</div>
			
			<div class="Fair-hiring-lastpart">

				<a class="fairhiring-Ethical-Recruitment" href="{{url('fair-hiring-detail',$fairhiring->slug)}}" >
					<h3>{{ $fairhiring->title }}</h3></a>
					{!! str_limit($fairhiring->description,$limit=130,$end='...')!!}
				</div>
				<div class="fairhiring-button">
					<a href="{{url('fair-hiring-detail',$fairhiring->slug)}}">
						<button type="button" class="fairhiring-btn">Read More</button> 
					</a>
				</div>
	
			@endforeach

			{{-- <div class="col-md-4 fairhiring-column-2">
				<h1>Categories</h1>
				<ul style="list-style-type:none"> 
					<li>
						<a class="fairhiring-categories" href="{{url('Fair hiring')}}" > <i class="fas fa-angle-right"></i>Fair hiring</a>
					</li>
					<li>
						<a class="fairhiring-categories" href="{{url('Fair hiring')}}" ><i class="fas fa-angle-right"></i>Tips</a>
					</li>
				</ul>
				<h1>More Posts</h1>
				<div class="row more-post-section">
					<div class="col-md-4 ">
						<div class="more-post-images">
							<a href="{{url('Employee Retention')}}"><img class="img-fluid" src="{{url('public/images/fa.jpg')}}"></a>

						</div>
					</div>
					<div class="col-md-8">
						<a class="fairhiring-more-post" href="{{url('Employee Retention')}}" >
							<h6>5 Proactive Ways to Boost Employee Retention</h6></a>
							<span>18th Jun, 2018</span>

						</div>
					</div>
					<div class="row more-post-section">
						<div class="col-md-4">
							<div class="more-post-images">
								<a href="{{url('Jobs Interview')}}"><img class="img-fluid" src="{{url('public/images/f2.jpg')}}"></a>

							</div>
						</div>
						<div class="col-md-8">
							<a class="fairhiring-more-post" href="{{url('Jobs Interview')}}" >
								<h6>Preparations before a Job Interview</h6></a>
								<span>18th Jun, 2018</span>

							</div>
						</div>
						<div class="row more-post-section">
							<div class="col-md-4">
								<div class="more-post-images">
									<a href="{{url('Ethical Recruitment')}}"><img class="img-fluid" src="{{url('public/images/2.jpg')}}"></a>

								</div>
							</div>
							<div class="col-md-8">
								<a class="fairhiring-more-post" href="{{url('Ethical Recruitment')}}" > <h6>Ethical Recruitment</h6></a>
								<span>10th Jun, 2018</span>

							</div>
						</div>
					</div> --}}
				</div>

			</div>


			@endsection 
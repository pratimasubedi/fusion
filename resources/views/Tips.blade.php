
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
<div class="container Tips-part">
	
		@foreach($get_tip as $tip)
		<div class="Tips-column-1">
			<div class="Tips-image">
				<a href="{{url('/')}}"><img class="img-fluid" src="{{url('uploads/'.$tip->image)}}"></a>
			</div>
			<div class="Tips-lastpart">
				<a class="Tips-Jobs-Interview" href="{{url('job-interview',$tip->slug)}}" >
					<h3>{{ $tip->title }}</h3></a>
					{!! str_limit($tip->description,$limit=130,$end='...')!!}


					<div class="Tips-button">

						<a href="{{ url('job-interview',$tip->slug)}}">
							<button type="button" class="Tips-btn">Read More</button> 
						</a>

					</div>
					
			</div>
		</div>
		@endforeach

</div>
				


				@endsection 
@extends('home-master')
@section('content')
@include('top-bg1-section')
<div class="container">
	<div class="pageTitleContainer">
		<div class="pageTitle">
			<h1>Title of the page</h1>
			<p><i>Lorem ipsum dolor sit amet, consectetur a</i></p>
		</div>
	</div>
</div>
{{-- next-1 --}}
<div class="container ethical-recruitment-part">
	@foreach($gethiringdetail as $hiringimage)
	
		<div class="c ethical-recruitment-column-1">
			<div class="ethical-recruitment-image">
				<a href=""><img class="img-fluid" src="{{url('uploads/'.$hiringimage->image)}}"></a>
			</div>
		</div>

	<div class=" ethical-recruitment-lastpart">
		<div class="">
			<a class="ethical-recruitment-Ethical-Recruitment" href="{{url('fair-hiring-detail')}}" ></a>
			<h1>{{ $hiringimage->title }}</h1>
			{!! $hiringimage->description !!}
			
		</div>
		
	</div>
	@endforeach
</div>

@endsection
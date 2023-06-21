@extends('home-master')
@section('content')
@include('top-bg1-section')
<div class="container">
	<div class="pageTitleContainer">
		<div class="pageTitle">
			<h1>Title of the page</h1>
			<p>Lorem ipsum dolor sit amet, consectetur a</p>
		</div>
	</div>
</div>
{{-- next-1 --}}
{{-- {{ dd($tipdetail) }} --}}
<div class="container jobs-interview-part">
	@foreach($tipdetail as $tipall)
	<div class="row">
		<div class="col-md-8 jobs-interview-column-1">
			<div class="jobs-interview-image">
				<a href=""><img class="img-fluid" src="{{url('/uploads/'.$tipall->image)}}"></a>
			</div>
			
			<h1>{{ $tipall->title }}</h1>
			{!! $tipall->description !!}
		</div>
	</div>
	@endforeach
</div>
@endsection
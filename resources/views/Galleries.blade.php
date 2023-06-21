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
{{--  --}}
<div class="container success-gallery-section bg-light-gray">

<div class="row">
	@foreach($getgallery as $gallery)
		<div class="col-md-6 section-gallery-column">
			<div class="row">
				<div class="col-sm-2">
					<div class="success-image">
				<img class="img-fluid" src="{{url('uploads/'.$gallery->image)}}">
					</div>
				</div>
				
				<div class="col-sm-4">
					<ul class="success-ul-1">
						<li>Faculty:</li>
						<li>College:</li>
						<li>Working In:</li>
					</ul>
				</div>
				<div class="col-sm-6">
						<ul class="success-ul-2">
							<li>{{ $gallery->faculty }}</li><br>
							<li>{{ $gallery->college }}</li><br>
							<li>{{ $gallery->company }}</li>
						</ul>
						<div class="success-last-part">
					<h3 class="success-title">{{ $gallery->name }}</h3>
					<p class="success-post">- {{ $gallery->designation }}</p>
					</div>
				</div>

			</div>
		</div>
		@endforeach
</div>


</div>

@endsection
@extends('home-master')
@section('content')
@include('top-bg1-section')
<style type="text/css">
	
	/*.galleryContainer{
		height: 350px;
		overflow: hidden;
		box-shadow: 0 0 4px 0 #eee;
	}
*/
	.gallerContainer a>img{
		width: 100%;
		height: 100%;
		object-fit: cover;
		filter: grayscale(100%);]
		transition: all 1s ease-in-out;
		
	}
	.galleryContainer:hover{
		filter: grayscale(0);
		transform: scale(1.1);
	}
	.mt-50{
		margin-top: 50px;
		margin-bottom: 50px;
	}
</style>
<div class="container mt-50">
	<div class="row">
		@foreach($getphoto as $photo)
		<div class="col-md-3">
			<div class="galleryContainer">
				<a href="{{url('/uploads/'.$photo->image)}}" data-lightbox="mygallery">
					<img class="img-fluid" src="{{url('/uploads/'.$photo->image)}}">
					
				</a>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection
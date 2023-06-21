@extends('home-master')
@section('content')


@include('top-bg-section')

<div class="container">
	<div class="pageTitleContainer">
		<div class="pageTitle">
			<h1>Title of the page</h1>
			<p>Lorem ipsum dolor sit amet, consectetur a</p>
		</div>
	</div>
</div>

{{-- next-1 --}}
<div class="container">
	@foreach($getevent as $event)
		<div class="container cont-main">
			<div class="row">
			<div class="col-md-4">
				<div class="Events-image">
					<a href="{{url('event-dynamic')}}">
						<img class="img-fluid" src="{{url('uploads/'.$event->image)}}">
					</a>
				</div>
			</div>
			
			<div class="col-md-8 smth">
				<div class="smth1">
					
					
					<p class="smdate"><i class="fas fa-calendar-times"></i>&nbsp{{ $event->date }}
					</p>
						
				
					<h3>
					<a href="{{url('event-dynamic',$event->id)}}">{{ $event->title }}</a></h3>

					<div class="smth_p">
						{!! $event->description !!}
					</div>
					

					<div class="smthbtn">
						<a href="{{url('event-dynamic',$event->id)}}">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>



@endsection
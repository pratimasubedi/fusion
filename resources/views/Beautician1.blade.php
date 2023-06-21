@extends('userlayout.user-main')
@section('usercontent')
@include('top-bg2-section')
{{--  --}}
<div class="container">
	<div class="pageTitleContainer">
		<div class="pageTitle">
			<h1>Title of the page</h1>
			<p>Lorem ipsum dolor sit amet, consectetur a</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		@foreach($getcategorysecond as $secondpage)
		<div class="col-lg-4 m">
			<div class="emply-text">
				<h3><span>{{ $secondpage->title_abbreviation }}</span></h3>
				
						  <a href="{{url('home/usercategorythirdpage',$secondpage->slug)}}">
							{{ $secondpage->title }}
							<span>
								(&nbsp;
								<strong class="text-color">
									{{ $secondpage->job_opening }}
								</strong>
								opening Jobs
								)
							</span>
						</a>
			</div><!-- Emply text -->
		</div>
		@endforeach
	</div>
</div>

@endsection
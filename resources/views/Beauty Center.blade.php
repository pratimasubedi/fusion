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
	{{--  --}}
	@foreach($categorydetail as $fourthpage)
<div class="container Beauty-Center-Section">

	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-7">
					<div class="beauty-center-image">
						<img class="img-fluid" src="{{url('/uploads/'.$fourthpage->image)}}">
					</div>
					

					
				</div>

				<div class="col-md-5">
					<div class="job-head-info">
						<h4>{{ $fourthpage->title }}</h4>
						<span>
							{{ $fourthpage->location }}
						</span>
						
						<p>
							<i class="fas fa-industry"></i>
							
							{{ $fourthpage->title }}
							
						</p>
						<br>
						<p>
							<i class="fas fa-calendar"></i>
							{{ date('M j, Y',strtotime($fourthpage->opendate)) }}
							-
							{{ date('M j, Y',strtotime($fourthpage->expiredate)) }}
						</p>
					</div>


				</div>
			</div>

			<div class="job-details">
						<h3>Job Description</h3>
						{!! $fourthpage->description !!}
						<h3>Required Knowledge, Skills, and Abilities</h3>
						
						{!! $fourthpage->ability !!}
						
						
					</div>
		</div>

		<div class="col-md-4">
			
				@if($fourthpage->status == 1)
					<a href="{{ route('login') }}"><div class="apply-thisjob"><i class="fas fa-paper-plane"> Apply</i></div></a>
				@else
					<div class="apply-thisjob"><i class="far fa-trash-alt"> Job has expired</i></div>
				@endif

				<div class="extra-job-info">
					<span>
						<i class="fas fa-calendar"></i>
						<strong>Expiring data:
						</strong> {{ date('M j, Y',strtotime($fourthpage->expiredate)) }}
					</span>
					
				</div>

				<div class="job-overview">
						<h2>Job Overview</h2>
						<ul>
							<li>
								<i class="fas fa-money-bill-alt"></i>
								<h3>Offered Salary</h3><span>
									{{ $fourthpage->salary }}
								</span>
							</li>
							<li>
								<i class="fas fa-mars-double"></i>
								<h3>Gender</h3><span>{{ $fourthpage->gender }}</span>
							</li>
							<li>
								<i class="fas fa-thumbtack"></i>
								<h3>Career Level</h3><span> {{ $fourthpage->career_level }}</span>
							</li>
							<li>
								<i class="fas fa-map-marker-alt"></i>
								<h3>Location</h3><span>{{ $fourthpage->location }}</span>
							</li>
							<li>
								<i class="fas fa-puzzle-piece"></i>
								<h3>Industry</h3><span>{{ $fourthpage->industry }}</span>
							</li>
							<li>
								<i class="fas fa-shield-alt"></i>
								<h3>Experience</h3>{{ $fourthpage->experience }}<span></span>
							</li>
							<li>
								<i class="fas fa-chart-line"></i>
								<h3>Qualification</h3><span>{{ $fourthpage->qualification }}</span>
							</li>
							<li>
								<i class="fas fa-calendar-alt"></i>
								<h3>Age range</h3>
								<span>
									{{ $fourthpage->age_range }}
								</span>
							</li>
						</ul>
					</div>

		</div>
	</div>
</div>
{{-- end --}}

@endforeach

@endsection
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
            @if(Session::has('success') && !empty(Session::get('success')))
               
                    <ul>
                        <div class="old">{{ Session::get('success')}}</div>
                    </ul>
            @endif
        </div>
@foreach($getusercategorydetail as $fourthpage)
<div class="container Beauty-Center-Section">
	
	{{-- {{ dd($fourthpage) }} --}}
		<div class="row">
			<div class="col-md-2">
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
		{{-- this part main part for job apply login and job expired session --}}
			<div class="col-md-5">
				{{-- {{ Auth::user()->id }} --}}
				@if($fourthpage->status == 1)
				
				<form action="{{ route('home.storeusercategory') }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
					<input type="hidden" name="category_id" value="{{ $fourthpage->id }}">
					<div class="apply-thisjob1">
						<button type="submit" class=""><i class="fas fa-paper-plane"> Apply</i>
						</button>
					</div>
				</form>
				@else
				<div class="apply-thisjob"><i class="far fa-trash-alt"> Job has expired</i>
				</div>
				@endif
				
				{{-- use if else condition here --}}
				
				<div class="extra-job-info">
					<span>
						<i class="fas fa-calendar"></i>
						<strong>Expiring data:
						</strong> {{ date('M j, Y',strtotime($fourthpage->expiredate)) }}
					</span>
					{{-- <span>
						<i class="fas fa-search-plus"></i>
						<strong>334
						</strong> Times Displayed
					</span> --}}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="job-details">
					<h3>Job Description</h3>
					{!! $fourthpage->description !!}
					<h3>Required Knowledge, Skills, and Abilities</h3>
					
					{!! $fourthpage->ability !!}
					
					
				</div>
			</div>
			
			<div class="col-md-4">
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
	@endforeach
	@endsection
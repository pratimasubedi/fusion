@extends('userlayout.user-main')
@section('usercontent')
{{--  END nav --}}
<section class="home-ftco-cover" style="background:linear-gradient(rgba(0, 0, 0, 0.0),rgba(0, 0, 0, 0.0)),url(../public/images/job.jpg); background-size: cover;
	background-repeat: no-repeat;
	background-position: center;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="find-cand">
					<div class="reviews-sec" id="reviews3">
						<div class="">
							<h3 style="font-size: 30px;">
							Find your desired Job.
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="find-cand">
				<div class="col-md-8 col-lg-8">
					<span>
						We have more than
						<strong class="text-color">51</strong>
						jobs &
						<strong class="text-color">3217</strong>
						resumes
						in our database.
					</span>
					<form action="{{ route('home.loginsearch') }}" method="POST">
						{{ csrf_field() }}
						<div class="job-field">
							<div class="home-job-field">
								<input type="text" name="search"
								placeholder="Search job (e.g. Doctor, Waiter)"/>
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>

</section>
{{-- popular-category --}}
	<div class="container">
		<h1 class="heading">All Category</h1>
		<p class="paragraph">{{ $countcategory }} jobs live.</p>
		
		<div class="row mt30">
			@foreach($datacategory as $homecategory)
			<div class="col-md-3 social-icon">
				<a href="{{url('home/usercategory',$homecategory->slug)}}">
					<i class="fas fa-gavel fa-3x"></i>
					<h6>{{ $homecategory->title }}</h6>
					<p>({{ $homecategory->job_opening }}open positions)</p>
				</a>
			</div>
			@endforeach
		</div>
		<div class="text-center editedbtndiv">
			<a class="home-browse-btn " href="{{url('home/usercategory')}}" >Browse All Category
		</a>
		</div>
		
	</div>
{{--home-relationship--}}
<section>
	<div class="home-relation">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading light">
						<h2>We believe in relationships. For the long term.</h2>
						<span>
							As one of the leading HR recruitment agencies in Nepal, Lucky HR Solution provides human resources consulting, search and fulfilling staffing needs with varieties of job opportunities for the candidates applying and recommend them for placements.
						</span>
						</div><!-- Heading -->
						<div class="stats-sec">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="stats">
										<span class="count">40</span>
										<h5>Companies Registered</h5>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="stats">
										<span class="count">60</span>
										<h5>Jobs Posted</h5>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="stats">
										<span class="count">3860
										</span>
										<h5>Candidate's Resume</h5>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="stats">
										<span class="count">595</span>
										<h5>Candidates Deployed</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
{{-- receptionist-section --}}

{{-- recent jobs section --}}
<div class="container">
	<div class="recents-jobs-section">
		<h1 class="recents-jobs-section-h1">Recent Jobs</h1>
		<div class="row">
			@foreach($recentcategory as $recent)
			<div class="col-md-6 job-section-1">
				<div class="row">
					<div class="col-sm-3">
						<img class="img-fluid" src="{{url('/uploads/'.$recent->image)}}">
					</div>
					<div class="col-sm-6">
						<h6>{{ $recent->title }}Required</h6>
						{{-- <p>Aroma Elite Spa Health Institute Company</p> --}}
						<span> <i class="fas fa-map-marker-alt"></i>{{ $recent->location }}</span>
					</div>

					<div class="col-sm-3">

						@if($recent->status == 1)
				
						<form action="{{ route('home.storeusercategory') }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
							<input type="hidden" name="category_id" value="{{ $recent->id }}">
							
								<button type="submit" class="userhome"><i class="fas fa-paper-plane"> Apply</i>
								</button>
							
						</form>
						@else
						<div class="apply-thisjob"><i class="far fa-trash-alt"> Job has expired</i>
						</div>
						@endif
					</div>

				</div>
			</div>
			@endforeach

		</div>
	</div>
	<a class="load-more-btn" href="{{url('home/usercategory')}}" >Load More Listings</a>
</div>
{{-- end receptionist-section --}}
{{-- online-resume --}}
<section>
	<div class="container-fluid">
		<div class="home-online-resume-section">
			<h3>Make a Difference with Your Online Resume!</h3>
			<span>Your resume in minutes with Fusion multi-purpose Online  resume assistance!</span>
			<a class="home-online-resume-btn" href="{{url('home')}}" >Create an account</a>
		</div>
	</div>
</section>
{{-- end online-resume --}}
{{-- works --}}
<div class="container-fluid works-section">
	<div class="container">
		<h1 class="works-heading-section">How its works</h1>
		<p class="works-paragraph-section">As one of the leading HR recruitment agencies in Nepal,  Fusion multi-purpose provides human resources consulting, search and fulfilling staffing needs with varieties of job opportunites for the candidates applying and recommend them for placements.</p>
		<div class="row">
			<div class="col-md-4">
				<i class="fas fa-user fa-3x"></i>
				<h3>Register an account</h3>
				<p>Register to  Fusion multi-purpose online portal for free. Update resume and increase
				profile percentage.</p>
			</div>
			<div class="col-md-4">
				<i class="fas fa-file-archive  fa-3x"></i>
				<h3>Specify & search your job</h3>
				<p>Browse jobs by country, category, salary range and more. </p>
			</div>
			<div class="col-md-4">
				<i class="fas fa-list-alt  fa-3x"></i>
				<h3>Apply for job</h3>
				<p>Apply for the best job matching your skills and get recruited by top companies in
				around the world.</p>
			</div>
		</div>
	</div>
</div>

@endsection
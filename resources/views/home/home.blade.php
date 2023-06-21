@extends('home-master')
@section('headercss')
@endsection
@section('content')
{{--  END nav --}}
@include('top-bg-section')
	<div class="container">


		<div class="home-search">
			<div class="reviews-sec" id="reviews3">
				
					<h3 style="font-size: 30px;">
					Find your desired Job.
					</h3>
						<i>
							We have more than
							51
							jobs &
							3217
							resumes
							in our database.
						</i>
					<form action="{{ url('/search') }}" method="POST">
						{{ csrf_field() }}
						<div class="job-field">
							<div class="home-job-field">
								<input type="text" name="search"
								placeholder="Search job (e.g. Doctor, Waiter)">

							</div>
						</div>
					</form>
				
			</div>

			<div class="plus-post-jobs-section">
				<div class="home-signup">
					<a href="{{url('/login')}}" class="home-post-job-btn"><i class="fas fa-plus"></i>Post Jobs</a>
				</div>
				<div class="home-signup">
					<button type="button" class="btn btn-primary home-sign" data-toggle="modal" data-target="#exampleModal">
					<i class="fas fa-key"></i> Signup
					</button>
				</div>

			</div>
		</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;
						</span>
						</button>
						<div class=" remove-bottom">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="account-popup account-popup_wider" style="left: 35%;">
											<h3>Sign Up</h3>
											<form action="{{ route('register') }}" method="POST">
												{{ csrf_field() }}
												<div class="row">
													<div class="col-md-6 col-lg-6">
														
														<div class="cfield">
															<input type="text" placeholder="Full Name *" name="name" required>
															<i class="fas fa-user"></i>
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														
														<div class="cfield">
															<input type="email" placeholder="Email *" name="email" required>
															<i class="fas fa-envelope"></i>
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														
														<div class="cfield">
															<input type="text" placeholder="Number *" name="phone" required>
															<i class="fas fa-phone"></i>
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														
														<div class="cfield">
															<input type="text" placeholder="Address *" name="address" required>
															<i class="fas fa-map-marker-alt"></i>
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="cfield">
															<input type="password" placeholder="Password *" name="password" required>
															<i class="fas fa-key"></i>
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="text-danger"></div>
														<div class="cfield">
															<input type="password" placeholder="Password confirmation *" name="password_confirmation" required>
															<i class="fas fa-key"></i>
														</div>
													</div>
												</div>
												<div class="text-danger" id="js_accept">
												</div>
												<div class="text-left">
													<p class="remember-label">
														<input type="checkbox" name="disable" value="1">
														<label for="accept-checkbox">
															I have read and accept the
															<a href="{{url('/terms')}}">terms and condition</a>
														</label>
													</p>
												</div>
												<div class="signup-button">
													<button type="submit" class="btn-signup">Signup
													</button>
												</div>
											</form>
											<div class="col-md-12">
												<br>
												New user? <strong><a href="{{url('/login')}}">Login  Now</a></strong>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">User Login  </h4>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" id="uLogin" placeholder="Email">
									<i class="fas fa-user"></i>
									<label for="uLogin" class="input-group-addon glyphicon glyphicon-user">
									</label>
								</div>
								</div> <!-- /.form-group -->
								<div class="form-group">
									<div class="input-group">
										<input type="password" class="form-control" id="uPassword" placeholder="Password"><i class="fas fa-key"></i>
										<label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
									</div>
								</div>
								<div class="home-login-submit-button">
									<button class="post-job-btn" type="button">Submit
									</button>
								</div>
							</form>
						</div>
						<div class="checkbox">
						</div>
					</div>
				</div>
			</div>
	</div>
		




{{-- popular-category --}}
			

	<div class="container mt50">
		<h1 class="heading">All Category</h1>
		<p class="paragraph">{{ $countcategory }} jobs live.</p>
		
		<div class="row mt30">
			@foreach($datacategory as $homecategory)
			<div class="col-md-3 social-icon">
				<a href="{{url('/categorydetail',$homecategory->slug)}}">
					<i class="fas fa-gavel fa-3x"></i>
					<h6>{{ $homecategory->title }}</h6>
					<p>({{ $homecategory->job_opening }}open positions)</p>
				</a>
			</div>
			@endforeach
		</div>
		<div class="text-center editedbtndiv">
			<a class="home-browse-btn " href="{{url('/main-category')}}" >Browse All Category
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
				<div class="row job-apply-row">
					<div class="col-sm-8 col-md-8 ">
						<div class="job-img">
							<img class="img-fluid" src="{{url('/uploads/'.$recent->image)}}">
						</div>
						
					</div>
					<div class="col-sm-4 col-md-4 ">
						<div class="job-apply-div">
								<h6>{{ $recent->title }}Required</h6>
						{{-- <p>Aroma Elite Spa Health Institute Company</p> --}}
								<span> <i class="fas fa-map-marker-alt"></i>{{ $recent->location }}
								</span>
						</div>
					
						<div class="home-btn">
							@if($recent->status == 1)
							<a href="{{ url('/login') }}" type="submit" class="btn home-applynow-btn"><i class="fas fa-paper-plane"> Apply</i></a>
							@else
								<div class="home-applynow-btn"><i class="far fa-trash-alt"> Job has expired</i></div>
							@endif
						</div>
					</div>
				{{-- 	<div class="col-sm-3">
						
					</div> --}}
				</div>
			</div>
			@endforeach

		</div>
	</div>
	<div class="text-center">
		<a class="load-more-btn" href="{{url('/main-category')}}" >Load More Listings</a>
	</div>
</div>
{{-- end receptionist-section --}}


{{-- online-resume --}}
<section>
	<div class="container-fluid pad0">
		<div class="home-online-resume-section">
			<h3>Make a Difference with Your Online Resume!</h3>
			<span>Your resume in minutes with Fusion multi-purpose Online  resume assistance!</span>
			<a class="home-online-resume-btn" href="{{url('/login')}}" >Create an account</a>
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
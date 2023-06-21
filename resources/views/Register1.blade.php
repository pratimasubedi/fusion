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
{{--  --}}
<section id="register-section">
	<div class=" remove-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="account-popup account-popup_wider" style="left: 35%;">
						<h3>Sign Up</h3>
						<form id="js-sign-up-form" action="{{ url('/register') }}" method="POST">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="text-danger" id="js_full_name"></div>
									<div class="cfield ">
										<input type="text" placeholder="Full Name *" name="full_name" id="full_name" required />
										<i class="fas fa-user"></i>
										
									</div>
								</div>
								
								<div class="col-md-6 col-lg-6">
									<div class="text-danger" id="js_email">
										
									</div>
									<div class="cfield">
										<input type="email" placeholder="Email *" name="email" id="email" required/>
										<i class="fas fa-envelope"></i>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
									<div class="text-danger" id="js_number">
										
									</div>
									<div class="cfield">
										<input type="text" placeholder="Number *" name="number" id="number" required/>
										<i class="fas fa-phone"></i>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
									<div class="text-danger" id="js_address">
										
									</div>
									<div class="cfield">
										<input type="text" placeholder="Address *" name="address" id="Address" required/>
										<i class="fas fa-map-marker-alt"></i>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
									<div class="text-danger" id="js_password">
										
									</div>
									<div class="cfield">
										<input type="password" placeholder="Password *" name="password" id="password" required/>
										<i class="fas fa-key"></i>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
									<div class="text-danger" id="js_password_confirmation">
										
									</div>
									<div class="cfield">
										<input type="password" placeholder="Password confirmation *"
										name="password_confirmation" id="password_confirmation" required/>
										<i class="fas fa-key"></i>
									</div>
								</div>
							</div>
							


							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" name="accept" id="exampleCheck1" value="1" required>
								<label class="form-check-label" for="exampleCheck1"><a href="" style="color: #555;" class="termClass">I have read and accept the terms and conditions</a> </label>
							</div>
							<div class="">
								
									{{-- <input type="checkbox" name="accept" id="accept-checkbox" value="1" required>
									<label for="accept-checkbox">
										I have read and accept the
										<a href="{{url('terms')}}">terms and condition</a>
										terms and condition
									</label> --}}
								
							</div>
							<div class="signup-button">
								<button type="submit" class="btn btn-default-signup">Signup</button>
							</div>
						</form>
						<div class="New-user-section">
							<div class="col-md-12">
								<br>
								New user? <strong><a href="{{url('/login')}}">Login  Now</a></strong>
							</div>
						</div>
						</div><!-- SIGNUP POPUP -->
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
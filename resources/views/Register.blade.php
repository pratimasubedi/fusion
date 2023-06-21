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
						<form  action="{{ route('register') }}" method="POST">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="cfield" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
										<input type="text" placeholder="Full Name *" name="name" id="name" required/>
										<i class="fas fa-user"></i>
										@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
										@endif
										
									</div>
								</div>
								
								<div class="col-md-6 col-lg-6">
									
									<div class="cfield" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
										<input type="email" placeholder="Email *" name="email" required/>
										<i class="fas fa-envelope"></i>
										@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
									
									<div class="cfield" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}">
										<input type="text" placeholder="Number *" name="phone" required/>
										<i class="fas fa-phone"></i>
										@if ($errors->has('phone'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('phone') }}</strong>
										</span>
										@endif
									</div>
								</div>
								
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<div class="cfield" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}">
											<input type="text" placeholder="Address*" name="address" required/>
											<i class="fas fa-map-marker-alt"></i>
											@if ($errors->has('address'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('address') }}</strong>
											</span>
											@endif
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
									
									<div class="cfield" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
										<input type="password" placeholder="Password *" name="password" id="password" required/>
										<i class="fas fa-key"></i>
										@if ($errors->has('password'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
									
									<div class="cfield" >
										<input type="password" placeholder="Password confirmation *"
										name="password_confirmation" id="password_confirmation" required/>
										<i class="fas fa-key"></i>
									</div>
								</div>
							</div>
							
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" name="disable" id="exampleCheck1" value="1" required>
								<label class="form-check-label" for="exampleCheck1"><a href="{{ url('terms') }}" style="color: #555;" class="termClass">I have read and accept the terms and conditions</a> </label>
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
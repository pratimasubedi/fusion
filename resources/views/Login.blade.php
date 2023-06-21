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
<section id="js-login-section">
	<div class=" remove-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="account-popup-area signin-popup-box static">
						<div class="account-popup">
							<h1>Login to start you session</h1>

							<form id="js-login-form" action="{{ route('login') }}" method="POST">
								{{ csrf_field() }}
								
								<div class="cfield form-group">
									<input type="text" placeholder="Email" name="email" class="form-control" />
									<i class="fas fa-user"></i>
								</div>
								<div class="cfield form-group">
									<input type="password" placeholder="Password" class="form-control" name="password" />
									<i class="fas fa-key"></i>
								</div>
							

								<div class="Login-button">
									
									<button type="submit" class="btn btn-btn-default">login</button>
								</div>
							</form>
							<div class="Register-section">
							<div class="col-md-12 col-lg-12">
								<br>
								New To Fusion Multi-Purpose Pvt Ltd <strong>
									<a href="{{url('/register')}}">Register Now.</a></strong>
							</div>

						</div>
					</div><!-- LOGIN POPUP -->
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
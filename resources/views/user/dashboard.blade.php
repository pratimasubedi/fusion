@extends('userlayout.user-main')
@section('usercontent')

@include('top-bg-section')

<div class="container">
  <div class="success-login-section">
    <div class="row">
      <div class="col-md-8">
      	
        <h2>You are successfully login</h2>
      </div>
      <div class="col-md-4">
        <a href="{{route('home.newjob')}}" class="success-job-btn"><i class="fas fa-plus"></i>Post Jobs</a>
        
      </div>
    </div>
  </div>
</div>

@endsection
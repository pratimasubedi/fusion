@extends('home-master')
@section('content') 


@include('top-bg-section')
<div class="container">
	<div class="home-search">
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
</div>


{{-- //search --}}
			<div class="container" style="    margin-top: 50px;
    margin-bottom: 50px;">
			    @if(isset($details))
			        <p> The Search results for your  <b> job&nbsp{{ $query }} </b> are :</p>
			 
			    <table class="table table-striped">
			        <thead>
			            <tr>
			            	<th>S.N</th>
			                <th>Title</th>
			                <th>Vacancy</th>
			                <th>Salary</th>
			                <th>Experience</th>
			                <th>Open Date</th>
			                <th>Expire Date</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			            @foreach($details as $user)
			            <tr>
			            	<td>{{ $loop->iteration }}</td>
			                <td>{{$user->title}}</td>
			                <td>{{ $user->job_vacancy}}</td>
			                <td>{{ $user->salary}}</td>
			                <td>{{ $user->experience}}</td>
			                <td>{{ $user->opendate}}</td>
			                <td>{{ $user->expiredate}}</td>
			                <td>
			                	@if($user->status == 1)
			                		<a href="{{ url('login') }}"><div class="apply-thisjob"><i class="fas fa-eye"> View More</i></div></a>
			                	@else
			                		<div class="apply-thisjob"><i class="far fa-trash-alt"> Job has expired</i></div>
								@endif
			                </td>
			            </tr>
			            @endforeach
			        </tbody>
			    </table>
			    @elseif(isset($message))
			      <p>{{ $message }}</p>
			     @else
			     	<p>{{ $word }}</p>
			    @endif
			</div>

@endsection
@extends('userlayout.user-main')
@section('usercontent')
@include('top-bg1-section')

<div class="container">
	<div class="home-search">
		<form action="{{ route('home.loginsearch') }}" method="POST">
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
		<div class="container">
            @if(Session::has('success') && !empty(Session::get('success')))
               
                    <ul>
                        <div class="old">{{ Session::get('success')}}</div>
                    </ul>
            @endif
        </div>
			<div class="container">
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
			                	{{-- @if($user->status == 1)
				
								<form action="{{ route('home.storeusercategory') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
									<input type="hidden" name="category_id" value="{{ $user->id }}">
									<div class="apply-thisjob1">
										<button type="submit" class=""><i class="fas fa-paper-plane"> Apply</i>
										</button>
									</div>
								</form>
								@else
								<div class="apply-thisjob"><i class="far fa-trash-alt"> Job has expired</i>
								</div>
								@endif --}}
								<a href="{{ url('home/usercategorydetail',$user->slug) }}"><div class="apply-thisjob"><i class="fas fa-eye"></i>View More</div></a>
								
								{{-- use if else condition here --}}
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
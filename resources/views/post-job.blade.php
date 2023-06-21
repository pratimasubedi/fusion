@extends('userlayout.user-main')
@section('usercontent')

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
		<div class="container">
            @if(Session::has('success') && !empty(Session::get('success')))
               
                    <ul>
                        <div class="old">{{ Session::get('success')}}</div>
                    </ul>
            @endif
        </div>
<div class="container">
	<div class="post-job-forms">
		<form action="{{ route('home.storenewjob') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-sm-6">
					<h1>Title:</h1>
					
					<input type="text" name="title" placeholder="Enter title here">
				</div>
				<div class="col-sm-6">
					<h1>Slug:</h1>
					<input type="text" name="slug" placeholder="Enter slug in small letter">
				</div>
				<div class="col-md-6 choose-file-section">
					<h2 class="select-file-heading">Image:</h2>
					<input class="select-file" type="file" name="image">
					
				</div>
				<div class="col-sm-6">
					<h1>Location:</h1>
					
					<input type="text" name="location" placeholder="Enter your location">
				</div>
				<div class="col-sm-6">
					<h1>Opendate:</h1>
					
					<input type="date" class="form-control" name="opendate" placeholder="Enter opendate">
				</div>
				<div class="col-sm-6">
					<h1>Closedate:</h1>
					<input type="date" class="form-control" name="closedate" placeholder="Enter closedate">
				</div>
				<div class="col-sm-6">
					<h1>Description:</h1>
					
					<input type="text" name="desc" placeholder="Enter your description here">
				</div>
				<div class="col-sm-6">
					<h1>Ability:</h1>
					<input type="text" name="ability" placeholder="Enter your ability here">
				</div>
				<div class="col-sm-6">
					<h1>Job vacancy:</h1>
					
					<input type="text" name="vacancy" placeholder="Job vacancy">
				</div>
				<div class="col-sm-6">
					<h1>Job opening:</h1>
					<input type="text" name="opening" placeholder="Job opening">
				</div>
				<div class="col-sm-6">
					<h1>Salary:</h1>
					
					<input type="text" name="salary" placeholder="Salary">
				</div>
				<div class="col-sm-6">
					<h1>Gender:</h1>
					<select class="gender-select" name="gender">
						<option placeholder="" disabled selected>Choose Gender</option>
						<option placeholder="Male">Male</option>
						<option placeholder="Female">Female</option>
						<option placeholder="Both">Both</option>
						
					</select>
				</div>
				<div class="col-sm-6">
					<h1>Industry:</h1>
					
					<input type="text" name="industry" placeholder="Enter job field">
				</div>
				<div class="col-sm-6">
					<h1>Career level:</h1>
					<input type="text" name="career" placeholder="Enter career level here">
				</div>
				<div class="col-sm-6">
					<h1>Experience:</h1>
					
					<input type="text" name="experience" placeholder="Enter your experience here">
				</div>
				<div class="col-sm-6">
					<h1>Qualification:</h1>
					<input type="text" name="qualification" placeholder="Enter your qualification here">
				</div>
				<div class="col-sm-6">
					<h1>Age range:</h1>
					<input type="text" name="age" placeholder="Enter your age here">
				</div>
				<div class="col-sm-6">
					<h1>Title abbreviation:</h1>
					<input type="text" name="abbreviation" placeholder="Enter your title abbreviation here(Example=Ram,write only R)">
				</div>
				<div class="col-sm-12">
					<h1>Status:</h1>
					<select class="status-select" name="status">
						<option placeholder="" disabled selected>Choose Status</option>
						<option value="2">Approval Required</option>
					</select>
				</div>

			</div>
			<div class="post-job-button-section">
			    <button class="post-job-btn" type="submit">Submit
			    </button>
			</div>
		</form>
	</div>
</div>
@endsection
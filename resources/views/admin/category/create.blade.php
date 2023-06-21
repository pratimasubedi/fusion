
@extends('adminlayout.admin-main')
@section('header')
@endsection
@section('body')
  <div class="content-wrapper">
     
    <div class="container-fluid">
      
        <section class="content contentdesign">
          <h3><u>Add JobCategory</u></h3>
          <form action="{{ route('admin.storejobcategory') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                 <label for="title">Title:</label>
                 <input type="text" name="title" class="form-control" placeholder="Title">
                     @if ($errors->has('title'))
                         <span class="help-block">
                             <strong>{{ $errors->first('title') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                 <label for="slug">Slug:</label>
                 <input type="text" name="slug" class="form-control" placeholder="slug">
                     @if ($errors->has('slug'))
                         <span class="help-block">
                             <strong>{{ $errors->first('slug') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                 <label for="location">Location:</label>
                 <input type="text" name="location" class="form-control" placeholder="Enter location">
                     @if ($errors->has('location'))
                         <span class="help-block">
                             <strong>{{ $errors->first('location') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('opendate') ? ' has-error' : '' }}">
                 <label for="opendate">Opendate:</label>
                 <input type="date" name="opendate" class="form-control" placeholder="Enter opendate">
                     @if ($errors->has('opendate'))
                         <span class="help-block">
                             <strong>{{ $errors->first('opendate') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('closedate') ? ' has-error' : '' }}">
                 <label for="closedate">closedate:</label>
                 <input type="date" name="closedate" class="form-control" placeholder="Enter closedate">
                     @if ($errors->has('closedate'))
                         <span class="help-block">
                             <strong>{{ $errors->first('closedate') }}</strong>
                         </span>
                     @endif       
            </div>

            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                 <label for="desc">Description:</label>
                 <textarea name="desc" class="form-control" id="editor1"></textarea>
                     @if ($errors->has('desc'))
                         <span class="help-block">
                             <strong>{{ $errors->first('desc') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('ability') ? ' has-error' : '' }}">
                 <label for="ability">Ability:</label>
                 <textarea name="ability" class="form-control" id="editor2"></textarea>
                     @if ($errors->has('ability'))
                         <span class="help-block">
                             <strong>{{ $errors->first('ability') }}</strong>
                         </span>
                     @endif       
            </div>

            {{-- <div class="form-group{{ $errors->has('job_view') ? ' has-error' : '' }}">
                 <label for="job_view">Job_viewed:</label>
                 <input type="text" name="job_view" class="form-control" placeholder="Enter Job View">
                     @if ($errors->has('job_view'))
                         <span class="help-block">
                             <strong>{{ $errors->first('job_view') }}</strong>
                         </span>
                     @endif       
            </div> --}}
           <div class="form-group{{ $errors->has('vacancy') ? ' has-error' : '' }}">
                 <label for="vacancy">Job Vacancy:</label>
                 <input type="text" name="vacancy" class="form-control" placeholder="Job Vacancy">
                     @if ($errors->has('vacancy'))
                         <span class="help-block">
                             <strong>{{ $errors->first('vacancy') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('opening') ? ' has-error' : '' }}">
                 <label for="vacancy">Job Openings:</label>
                 <input type="text" name="opening" class="form-control" placeholder="Job Opening">
                     @if ($errors->has('opening'))
                         <span class="help-block">
                             <strong>{{ $errors->first('opening') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                 <label for="salary">Offered Salary:</label>
                 <input type="text" name="salary" class="form-control" placeholder="Offered Salary">
                     @if ($errors->has('salary'))
                         <span class="help-block">
                             <strong>{{ $errors->first('salary') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                 <label for="gender">Gender:</label>
                 <select name="gender" class="form-control" placeholder="Gender">
                    <option value="" disabled selected>Choose Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Both">Both</option>
                 </select>
                     @if ($errors->has('gender'))
                         <span class="help-block">
                             <strong>{{ $errors->first('gender') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('career') ? ' has-error' : '' }}">
                 <label for="carrer">Career Level:</label>
                 <input type="text" name="career" class="form-control" placeholder="Career Level">
                     @if ($errors->has('career'))
                         <span class="help-block">
                             <strong>{{ $errors->first('career') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('industry') ? ' has-error' : '' }}">
                 <label for="industry">Industry:</label>
                 <input type="text" name="industry" class="form-control" placeholder="Industry">
                     @if ($errors->has('industry'))
                         <span class="help-block">
                             <strong>{{ $errors->first('industry') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                 <label for="experience">Experience:</label>
                 <input type="text" name="experience" class="form-control" placeholder="experience">
                     @if ($errors->has('experience'))
                         <span class="help-block">
                             <strong>{{ $errors->first('experience') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('qualification') ? ' has-error' : '' }}">
                 <label for="qualification">Qualification:</label>
                 <input type="text" name="qualification" class="form-control" placeholder="Qualification">
                     @if ($errors->has('qualification'))
                         <span class="help-block">
                             <strong>{{ $errors->first('qualification') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                 <label for="age">Age Range:</label>
                 <input type="text" name="age" class="form-control" placeholder="(Example:3-5)">
                     @if ($errors->has('age'))
                         <span class="help-block">
                             <strong>{{ $errors->first('age') }}</strong>
                         </span>
                     @endif       
            </div>


            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                 <label for="file">Image</label>
                 <input type="file" name="image" id="file" onchange="PreviewImage(event)">
                 <img src="" id="PreviewImageID" class="hello">
                     @if ($errors->has('image'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                     @endif
            </div>
            <div class="form-group{{ $errors->has('abbreviation') ? ' has-error' : '' }}">
                 <label for="abbreviation">Title Abbreviation:</label>
                 <input type="text" name="abbreviation" class="form-control" placeholder="Enter Title First Letter Here...">
                     @if ($errors->has('abbreviation'))
                         <span class="help-block">
                             <strong>{{ $errors->first('abbreviation') }}</strong>
                         </span>
                     @endif       
            </div>

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                 <label for="status">Status:</label>
                 <select name="status" class="form-control" placeholder="status">
                    <option value="" disabled selected>Choose Status</option>
                    <option value="1">Job Opened</option>
                    <option value="0">Job Expired</option>
                 </select>
                     @if ($errors->has('status'))
                         <span class="help-block">
                             <strong>{{ $errors->first('status') }}</strong>
                         </span>
                     @endif       
            </div>
            
            <button type="submit" class="btn btn-success btn-lg">Insert</button>
                   
          </form>   
        </section>
    </div>
  </div>
@endsection

@section('footer')
<script src="{{ url('public/fusionadmin/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
    </script>
<script>
function PreviewImage(event) {
      var preview = document.getElementById('PreviewImageID');
      preview.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection







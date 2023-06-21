
@extends('adminlayout.admin-main')
@section('header')
@endsection
@section('body')
  <div class="content-wrapper">
     
    <div class="container-fluid">
      
        <section class="content contentdesign">
          <h3><u>Add Gallery</u></h3>
          <form action="{{ route('admin.storegallery') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                 <label for="name">Name:</label>
                 <input type="text" name="name" class="form-control" placeholder="name">
                     @if ($errors->has('name'))
                         <span class="help-block">
                             <strong>{{ $errors->first('name') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                 <label for="designation">Designation:</label>
                 <input type="text" name="designation" class="form-control" placeholder="designation">
                     @if ($errors->has('designation'))
                         <span class="help-block">
                             <strong>{{ $errors->first('designation') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('faculty') ? ' has-error' : '' }}">
                 <label for="faculty">Faculty:</label>
                 <input type="text" name="faculty" class="form-control" placeholder="designation">
                     @if ($errors->has('faculty'))
                         <span class="help-block">
                             <strong>{{ $errors->first('faculty') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('collegename') ? ' has-error' : '' }}">
                 <label for="collegename">College Name:</label>
                 <input type="text" name="collegename" class="form-control" placeholder="College Name">
                     @if ($errors->has('collegename'))
                         <span class="help-block">
                             <strong>{{ $errors->first('collegename') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('companyname') ? ' has-error' : '' }}">
                 <label for="companyname">Company Name:</label>
                 <input type="text" name="companyname" class="form-control" placeholder="Company Name">
                     @if ($errors->has('companyname'))
                         <span class="help-block">
                             <strong>{{ $errors->first('companyname') }}</strong>
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
    </script>
<script>
function PreviewImage(event) {
      var preview = document.getElementById('PreviewImageID');
      preview.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection







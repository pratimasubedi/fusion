
@extends('adminlayout.admin-main')
@section('header')
@endsection
@section('body')
  <div class="content-wrapper">
     
    <div class="container-fluid">
      
        <section class="content contentdesign">
          <h3><u>Edit About</u></h3>
          {!! Form::open(array('route' => array('admin.updateabout', $abt->id), 'files' => true, 'method' => 'POST')) !!}
            {{csrf_field()}}

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                 <label for="title">Title:</label>
                 <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $abt->title }}">
                     @if ($errors->has('title'))
                         <span class="help-block">
                             <strong>{{ $errors->first('title') }}</strong>
                         </span>
                     @endif       
            </div>

            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                 <label for="desc">Description:</label>
                 <textarea name="desc" class="form-control" id="editor1">{{ $abt->description }}</textarea>
                     @if ($errors->has('desc'))
                         <span class="help-block">
                             <strong>{{ $errors->first('desc') }}</strong>
                         </span>
                     @endif       
            </div>
           
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                 <label for="file">Image</label>
                 <input type="file" name="image" onchange="PreviewImage(event)">
                    <img src="{{ url('/uploads/'.$abt->image) }}" id="PreviewImageID" class="hello">
                     @if ($errors->has('image'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                     @endif
            </div>
            <button type="submit" class="btn btn-success btn-lg">Save Changes</button>
                   
          {{ Form::close()}}
   
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







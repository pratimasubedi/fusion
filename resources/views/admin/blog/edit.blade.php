
@extends('adminlayout.admin-main')
@section('header')
@endsection
@section('body')
  <div class="content-wrapper">
     
    <div class="container-fluid">
      
        <section class="content contentdesign">
          <h3><u>Edit Blog</u></h3>
          {!! Form::open(array('route' => array('admin.updateblog', $blog->id), 'files' => true, 'method' => 'POST')) !!}
            {{csrf_field()}}

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                 <label for="title">Title:</label>
                 <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $blog->title }}">
                     @if ($errors->has('title'))
                         <span class="help-block">
                             <strong>{{ $errors->first('title') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                 <label for="slug">Slug:</label>
                 <input type="text" name="slug" class="form-control" placeholder="slug" value="{{ $blog->slug }}">
                     @if ($errors->has('slug'))
                         <span class="help-block">
                             <strong>{{ $errors->first('slug') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                 <label for="desc">Description:</label>
                 <textarea name="desc" class="form-control" id="editor1">{{ $blog->description }}</textarea>
                     @if ($errors->has('desc'))
                         <span class="help-block">
                             <strong>{{ $errors->first('desc') }}</strong>
                         </span>
                     @endif       
            </div>
           
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                 <label for="file">Image</label>
                 <input type="file" name="image" onchange="PreviewImage(event)">
                    <img src="{{ url('/uploads/'.$blog->image) }}" id="PreviewImageID" class="hello">
                     @if ($errors->has('image'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                     @endif
            </div>
            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                 <label for="type">BlogType:</label><span style="color:#F00; font-size:24px">* </span>
                 <select name="type" class="form-control" size="1" style="width:200px;" required > 
                    <option value="{{ $blog->blogtype }}">{{ $blog->blogtype }}</option>
                    <option value="Fair Hiring">Fair Hiring</option>
                    <option value="Tips">Tips</option>
         
                 </select>  
                 
                     @if ($errors->has('type'))
                         <span class="help-block">
                             <strong>{{ $errors->first('type') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                 <label for="title">date:</label>
                 <input type="date" name="date" class="form-control" placeholder="Title" value="{{ $blog->date }}">
                     @if ($errors->has('date'))
                         <span class="help-block">
                             <strong>{{ $errors->first('date') }}</strong>
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







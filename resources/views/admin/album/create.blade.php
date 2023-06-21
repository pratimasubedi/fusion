
@extends('adminlayout.admin-main')
@section('header')
@endsection
@section('body')
  <div class="content-wrapper">
     
    <div class="container-fluid">
      
        <section class="content contentdesign">
          <h3><u>Add Album</u></h3>
          <form action="{{ route('admin.storealbum') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                 <label for="name">Name:</label>
                 <input type="text" name="name" class="form-control" placeholder="Name">
                     @if ($errors->has('name'))
                         <span class="help-block">
                             <strong>{{ $errors->first('name') }}</strong>
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

<script>
function PreviewImage(event) {
      var preview = document.getElementById('PreviewImageID');
      preview.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection







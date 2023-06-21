
@extends('adminlayout.admin-main')
@section('header')
@endsection
@section('body')
  <div class="content-wrapper">
     
    <div class="container-fluid">
      
        <section class="content contentdesign">
          <h3><u>Edit Training</u></h3>
          {!! Form::open(array('route' => array('admin.updatetraining', $train->id), 'files' => true, 'method' => 'POST')) !!}
            {{csrf_field()}}

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                 <label for="title">Title:</label>
                 <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $train->title }}">
                     @if ($errors->has('title'))
                         <span class="help-block">
                             <strong>{{ $errors->first('title') }}</strong>
                         </span>
                     @endif       
            </div>

            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                 <label for="desc">Description:</label>
                 <textarea name="desc" class="form-control" id="editor1">{{ $train->description }}</textarea>
                     @if ($errors->has('desc'))
                         <span class="help-block">
                             <strong>{{ $errors->first('desc') }}</strong>
                         </span>
                     @endif       
            </div>
           
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                 <label for="file">Image</label>
                 <input type="file" name="image" onchange="PreviewImage(event)">
                    <img src="{{ url('/uploads/'.$train->image) }}" id="PreviewImageID" class="hello">
                     @if ($errors->has('image'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                     @endif
            </div>
            <div class="form-group{{ $errors->has('elligible') ? ' has-error' : '' }}">
                 <label for="elligible">Elligible:</label>
                 <input type="text" name="elligible" class="form-control" placeholder="Enter elligible requirement(Ex-SLC,PLUS2" value="{{ $train->elligible }}">
                     @if ($errors->has('elligible'))
                         <span class="help-block">
                             <strong>{{ $errors->first('elligible') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                 <label for="address">Address:</label>
                 <input type="text" name="address" class="form-control" placeholder="address" value="{{ $train->address }}">
                     @if ($errors->has('address'))
                         <span class="help-block">
                             <strong>{{ $errors->first('address') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                 <label for="date">Date:</label>
                 <input type="date" name="date" class="form-control" placeholder="date" value="{{ $train->date }}">
                     @if ($errors->has('date'))
                         <span class="help-block">
                             <strong>{{ $errors->first('date') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                 <label for="time">Time:</label>
                 <input type="text" name="time" class="form-control" placeholder="time" value="{{ $train->time }}">
                     @if ($errors->has('time'))
                         <span class="help-block">
                             <strong>{{ $errors->first('time') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('charge') ? ' has-error' : '' }}">
                 <label for="charge">Charge:</label><span style="color:#F00; font-size:24px">* </span>
                 <select name="charge" class="form-control" size="1" style="width:200px;" required > 
                    {{-- <option value="" disabled selected>Choose Payment Type</option> --}}
                    <option value="{{ $train->charge }}">{{ $train->charge }}</option>
                    <option value="Free">Free</option>
                    <option value="Cash">Cash</option>
         
                 </select>  
                 
                     @if ($errors->has('charge'))
                         <span class="help-block">
                             <strong>{{ $errors->first('charge') }}</strong>
                         </span>
                     @endif       
            </div>
            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                 <label for="amount">Cash Amount:</label>
                 <input type="text" name="amount" class="form-control" placeholder="amount" value="{{ $train->amount }}">
                     @if ($errors->has('amount'))
                         <span class="help-block">
                             <strong>{{ $errors->first('amount') }}</strong>
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







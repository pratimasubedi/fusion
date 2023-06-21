
@extends('adminlayout.admin-main')
@section('header')
@endsection
@section('body')
  <div class="content-wrapper">
     
    <div class="container-fluid">
      
        <section class="content contentdesign">
          <h3><u>Add Important Links</u></h3>
          <form action="{{ route('admin.storelink') }}" method="POST">
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

            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                 <label for="url">Link Url:</label>
                 <input type="text" name="url" class="form-control" placeholder="Url">
                     @if ($errors->has('url'))
                         <span class="help-block">
                             <strong>{{ $errors->first('url') }}</strong>
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

@endsection







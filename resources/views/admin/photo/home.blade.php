@extends('adminlayout.admin-main')
@section('header')


@section('body')


<div class="content-wrapper">
    <div class="container">
        @if(Session::has('success') && !empty(Session::get('success')))
        
        <ul>
            <div class="old">{{ Session::get('success')}}</div>
        </ul>
        @endif
    </div>

    <div class="container-fluid">

        <section class="content contentdesign">
            <ul class="list-unstyled">
                <li><h3>List of Photos</h3></li>
                <li><a href="{{ route('admin.createphoto') }}"><h3 class="right-float "><i class="fa fa-plus plus-color"></i>New</h3></a></li>
            </ul>

          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>S.N</th>
                        <th>Album Name</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach($getphoto as $photo)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $photo->album->albumname }}</td>
                    <td><img src="{{ url('uploads/'.$photo->image) }}" class="img-responsive eslider" style="width:150px;border-radius:15px"></td>
                    <td><a href="{{'editphoto&'.$photo->id}}" class="btn btn-success faedit"> <i class="fa fa-edit">Edit</i></a>

                        <a href="{{'deletephoto&'.$photo->id}}" class="btn btn-danger fadel" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a></td>
                    </tr>
                    @endforeach
                </tbody>
                
                <tfoot>
                    <th>S.N</th>
                    <th>Album Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tfoot>
            </table>
        </div>
    </section>
</div>
</div>



@endsection

@section('footer')


@endsection



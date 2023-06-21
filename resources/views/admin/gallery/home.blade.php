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

    <div class="container-fluid conent_body">

        <section class="content contentdesign">
            <ul class="list-unstyled">
                <li><h3>List of Gallery</h3></li>
                <li><a href="{{ route('admin.creategallery') }}"><h3 class="right-float "><i class="fa fa-plus plus-color"></i>New</h3></a></li>
            </ul>

          <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Faculty</th>
                        <th>College Name</th>
                        <th>Image</th>
                        <th>Company Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach($getgallery as $gallery)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $gallery->name }}</td>
                            <td>{{ $gallery->designaiton }}</td>
                            <td>{{ $gallery->faculty }}</td>
                            <td>{{ $gallery->college }}</td>
                            <td>{{ $gallery->company }}</td>
                            
                            <td><img src="{{ url('/uploads/'.$gallery->image) }}" class="img-responsive eslider" style="width:250px;border-radius:15px"></td>
                            {{ $gallery->date }}
                            <td><a href="{{'editgallery&'.$gallery->id}}" class="btn btn-success fagood"> <i class="fa fa-edit">Edit</i></a>

                                <a href="{{'deletegallery&'.$gallery->id}}" class="btn btn-danger fadanger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a></td>
                            </tr>
                            @endforeach
                </tbody>
                
                <tfoot>
                </tfoot>
            </table>
        </div>
    </section>
</div>
</div>



@endsection

@section('footer')


@endsection



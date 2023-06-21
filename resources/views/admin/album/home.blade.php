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

    <div class="container-fluid content_body">

        <section class="content contentdesign">
            <ul class="list-unstyled">
                <li><h3>List of Album</h3></li>
                <li><a href="{{ route('admin.createalbum') }}"><h3 class="right-float "><i class="fa fa-plus plus-color"></i>New</h3></a></li>
            </ul>

          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>S.N</th>
                        <th>Album</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach($album as $alb)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $alb->albumname }}</td>
                    <td><img src="{{ url('uploads/'.$alb->image) }}" class="img-responsive eslider" style="width:150px;border-radius:15px"></td>
                    <td><a href="{{'editalbum&'.$alb->id}}" class="btn btn-success faedit"> <i class="fa fa-edit">Edit</i></a>

                        <a href="{{'deletealbum&'.$alb->id}}" class="btn btn-danger fadel" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a></td>
                    </tr>
                    @endforeach
                </tbody>
                
                <tfoot>
                    <th>S.N</th>
                    <th>Album</th>
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



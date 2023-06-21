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
                    <li><h3>List of Important Links</h3></li>
                    <li><a href="{{ route('admin.createlink') }}"><h3 class="right-float "><i class="fa fa-plus plus-color"></i>New</h3></a></li>
                </ul>

          <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>URL</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach($link as $link)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $link->title }}</td>
                            <td>{{ $link->url }}</td>
                            <td><a href="{{'editlink&'.$link->id}}" class="btn btn-success fagood"> <i class="fa fa-edit">Edit</i></a>

                                <a href="{{'deletelink&'.$link->id}}" class="btn btn-danger fadanger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a></td>
                            </tr>
                            @endforeach
                </tbody>
                
                <tfoot>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>URL</th>
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



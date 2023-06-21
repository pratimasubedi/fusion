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
                <li><h3>List of About</h3></li>
                <li><a href="{{ route('admin.createabout') }}"><h3 class="right-float "><i class="fa fa-plus plus-color"></i>New</h3></a></li>
            </ul>

          <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Logo</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach($getabout as $abt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $abt->title }}</td>
                            <td>{!! str_limit($abt->description,$limit=130,$end='...')!!}</td>
                            <td><img src="{{ url('/uploads/'.$abt->image) }}" class="img-responsive eslider" style="width:250px;border-radius:15px"></td>
                            <td><a href="{{'editabout&'.$abt->id}}" class="btn btn-success fagood"> <i class="fa fa-edit">Edit</i></a>

                                <a href="{{'deleteabout&'.$abt->id}}" class="btn btn-danger fadanger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a></td>
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



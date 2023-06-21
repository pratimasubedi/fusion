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
                <li><h3>List of User Applied Job</h3></li>
            </ul>

          <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>S.N</th>
                        <th>UserName</th>
                        <th>UserContact</th>
                        <th>Applied Job</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach($datajob as $job)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $job->user->name }}</td>
                            <td>{{ $job->user->phone }}</td>
                            <td>{{ $job->category->title }}</td>
                           <td>
                                <a href="{{'deletejob&'.$job->id}}" class="btn btn-danger fadanger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a>
                            </td>
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



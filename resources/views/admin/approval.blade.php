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
                <li><h3>List of Job approval</h3></li>
                
            </ul>

          <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th>Job Vacancy</th>
                        <th>Job Opening</th>
                        <th>Experience</th>
                        <th>Qualification</th>
                        <th>Age Range</th>
                        <th>Career Level</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach($getapproval as $approval)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $approval->title }}</td>
                            <td>{!!  str_limit($approval->description,$limit=130,$end='...')!!}</td> 
                            <td>{{ $approval->location }}</td>
                            <td><img src="{{ url('/uploads/'.$approval->image) }}" class="img-responsive eslider" style="width:100px;border-radius:15px"></td>
                            <td>{{ $approval->job_vacancy }}</td>
                            <td>{{ $approval->job_opening }}</td>
                            <td>{{ $approval->experience }}</td>
                            <td>{{ $approval->qualification }}</td>
                            <td>{{ $approval->age_range }}</td>
                            <td>{{ $approval->career_level }}</td>

                            <td>@if($approval->status == 2)
                                <button class="btn btn-info">Approval Required</button>
                                @endif
                            </td>
                            <td><a href="{{'editjobcategory&'.$approval->id}}" class="btn btn-success fagood"> <i class="fa fa-edit">Edit</i></a>

                                <a href="{{'deletejobcategory&'.$approval->id}}" class="btn btn-danger fadanger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a></td>
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



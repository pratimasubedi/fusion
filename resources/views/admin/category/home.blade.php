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
                <li><h3>List of Job Category</h3></li>
                <li><a href="{{ route('admin.createjobcategory') }}"><h3 class="right-float "><i class="fa fa-plus plus-color"></i>New</h3></a></li>
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
                  @foreach($getcategory as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{!!  str_limit($category->description,$limit=130,$end='...')!!}</td> 
                            <td>{{ $category->location }}</td>
                            <td><img src="{{ url('/uploads/'.$category->image) }}" class="img-responsive eslider" style="width:100px;border-radius:15px"></td>
                            <td>{{ $category->job_vacancy }}</td>
                            <td>{{ $category->job_opening }}</td>
                            <td>{{ $category->experience }}</td>
                            <td>{{ $category->qualification }}</td>
                            <td>{{ $category->age_range }}</td>
                            <td>{{ $category->career_level }}</td>

                            <td>@if($category->status == 1)
                                <button class="btn btn-info">Job Start</button>
                                @elseif($category->status == 0)
                                <button class="btn btn-info">Job Expired</button>
                                @endif
                            </td>
                            <td><a href="{{'editjobcategory&'.$category->id}}" class="btn btn-success fagood"> <i class="fa fa-edit">Edit</i></a>

                                <a href="{{'deletejobcategory&'.$category->id}}" class="btn btn-danger fadanger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a></td>
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



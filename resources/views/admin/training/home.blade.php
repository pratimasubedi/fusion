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
                <li><h3>List of Training</h3></li>
                <li><a href="{{ route('admin.createtraining') }}"><h3 class="right-float "><i class="fa fa-plus plus-color"></i>New</h3></a></li>
            </ul>

          <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Elligibility</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Charge</th>
                        <th>Amount</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach($get_training as $training)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $training->title }}</td>
                            <td>{!! str_limit($training->description,$limit=130,$end='...')!!}</td>
                            <td><img src="{{ url('/uploads/'.$training->image) }}" class="img-responsive eslider" style="width:250px;border-radius:15px">
                            </td>
                            <td>{{ $training->elligible }}</td>
                            <td>{{ $training->address }}</td>
                            <td>{{ $training->date }}</td>
                            <td>{{ $training->time }}</td>
                            <td>{{ $training->charge }}</td>
                            <td>{{ $training->amount }}</td>
                            <td><a href="{{'edittraining&'.$training->id}}" class="btn btn-success fagood"> <i class="fa fa-edit">Edit</i></a>

                                <a href="{{'deletetraining&'.$training->id}}" class="btn btn-danger fadanger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a></td>
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



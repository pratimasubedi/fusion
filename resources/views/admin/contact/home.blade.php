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
            <h3><u>List of Contact</u></h3>

          <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($getcontact as $cont)
                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cont->name }}</td>
                        <td>{{ $cont->email }}</td>
                        <td>{{ $cont->phone }}</td>
                        <td>{{ $cont->subject }}</td>
                        <td>{{ $cont->message }}</td>
                        <td>
                            <a href="{{'deletecontact&'.$cont->id}}" class="btn btn-danger fadel" onclick="return confirm('Are you sure?');"><i class="fa fa-remove">Delete</i></a>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
                
                <tfoot>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Subject</th>
                    <th>Message</th>
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



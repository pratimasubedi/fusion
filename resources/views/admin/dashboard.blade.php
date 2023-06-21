
@extends('adminlayout.admin-main')
@section('header')
@endsection

@section('body')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content content-design">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading"> Admin Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in as <strong><font color='red'>Admin!!</font></strong></p>
                </div>
            </div>
        </div>
      

    </section>
  </div>
@endsection

@section('footer')
@endsection




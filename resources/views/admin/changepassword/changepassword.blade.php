
@extends('adminlayout.admin-main')
@section('header')
@endsection

@section('body')

  <div class="content-wrapper">
     
    <div class="container-fluid">
        <div class="container animated rollIn">
            @if(Session::has('success') && !empty(Session::get('success')))
               
                    <ul>
                        <div class="old">{{ Session::get('success')}}</div>
                    </ul>
            @endif
        </div>
      
        <section class="content">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password(<strong style="color:#a8b7a9">Stock Admin Login</strong>)</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.changepassword.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('oldPassword') ? ' has-error' : '' }}">
                            <label for="oldPassword" class="col-md-4 control-label">Old Password</label>

                            <div class="col-md-6">
                                <input id="oldpassword" type="password" class="form-control" name="oldPassword" required>

                                @if ($errors->has('oldPassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldPassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('newPassword') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="newpassword" type="Password" class="form-control" name="newPassword" required>
                                <span id="result"></span>

                                @if ($errors->has('newPassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newPassword') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>

        </section>
    </div>
  </div>

 

@endsection

@section('footer')

@endsection







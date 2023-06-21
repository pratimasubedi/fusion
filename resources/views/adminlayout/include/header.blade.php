<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fusion | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('public/fusionadmin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('public/fusionadmin/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('public/fusionadmin/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/fusionadmin/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{url('public/fusionadmin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('public/fusionadmin/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ url('public/fusionadmin/css/admincustom.css') }}">
  <link rel="stylesheet" href="{{ url('public/fusionadmin/css/animate.css') }}">
 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Fusion</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ url('public/images/fusion.jpg') }}" class="user-image" alt="image">
              <span class="hidden-xs">{{ Auth::guard('admin')->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ url('public/images/fusion.jpg') }}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::guard('admin')->user()->name }} - Web Developer
                  <small>Member since Nov. 2018</small>
                </p>
              </li>
             
              <li class="user-footer">
                @auth
                 <li class="nav-item"><a href="{{route('admin.logout')}}" class="nav-link">Logout</a></li>
                @endauth
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
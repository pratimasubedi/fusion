<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>lucky</title>
  <!--  main link bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="owl-carousel.min.css">
  <link rel="stylesheet" type="text/css" href="owl.theme.default.min.css">
  <!--font icon-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  {{-- owl carousel --}}
  {{-- other link --}}
  <!-- style -->
  <link rel="stylesheet" type="text/css" href="{{url('public/css/header.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/home.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/footer.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/test.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/blogs.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/about.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/jobsseeker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Contact Us.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Fair hiring.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Ethical Recruitment.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Jobs Interview.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Employee Retention.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Tips.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/about.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Events.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Events dynamic.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Galleries.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/All jobs.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Companies.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Login.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Register.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Terms.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Main Categories.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Beautician.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Manicurist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Beauty Center.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{url('public/css/Sub Categories.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/success-login.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/post-job.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/userlogout.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/nayafolder.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/message.css')}}">
  
</head>
<style type="text/css">
html {
overflow-x: hidden;
}
</style><style type="text/css">
html {
overflow-x: hidden;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark ftco-navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
  <div class="container">
    <a href="/" title="">
      <div class="header-image">
        <img class="img-fluid" src="{{url('public/images/fusion.jpg')}}">
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" style="    margin-left: 332px;" id="ftco-nav">
      <ul class="navbar-nav ">
        <li class="nav-item active"><a href="{{route('home.user')}}" class="nav-link">Home</a></li>
        <li class="nav-item active"><a href="{{ route('home.usercategory') }}" class="nav-link">Job Seeker</a></li>
        <li class="nav-item active"><a href="{{ route('home.newjob') }}" class="nav-link">Post Job</a></li>
        <li class="nav-item"><a href="{{route('home.usercontact')}}" class="nav-link">Contact Us</a></li>
           
      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav">
        <!-- Authentication Links -->
        @guest
        {{--  <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
          @if (Route::has('register'))
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
        </li> --}}
        @else
        @auth
        {{-- <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <li class="nav-item" id="logout-form"><a href="{{route('home.userlogout')}}" class="nav-link">logout</a></li>
            
          </div>
        </li> --}}
          <div class="dropdown">
            <a class="btn btn-secondary-user-logout dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{ route('home.userlogout') }}">Logout</a>
            </div>
          </div>

        @endauth
        @endguest
      </ul>
    </div>
  </div>
</nav>
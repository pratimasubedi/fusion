<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>lucky</title>
  <!--  main link bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('public/css/owl.theme.css')}}">
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
{{--navbar--}}
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
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{url('home')}}" class="nav-link">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" dropdown-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Blogs
          </a>
          <ul class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{url('Fair hiring')}}">Fair hiring</a></li>
            <li><a class="dropdown-item" href="{{url('Tips')}}">Tips</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" dropdown-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{url('about')}}">about</a></li>
            <li><a class="dropdown-item" href="{{url('Events')}}">Events</a></li>
            <li><a class="dropdown-item" href="{{url('Galleries')}}">Galleries</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" dropdown-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jobs Seeker
          </a>
          <ul class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{url('Main Categories')}}">Main Categories</a></li>
            <li><a class="dropdown-item" href="{{url('Sub Categories ')}}">Sub Categories</a></li>
            
          </ul>
        </li>
        <li class="nav-item"><a href="{{url('Contact Us')}}" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="{{url('Contact Us')}}" class="nav-link">User Name</a></li>
      </ul>
    </div>
  </div>
</nav>
<section class="success-cover" style="background:linear-gradient(rgba(0, 0, 0, .0),rgba(0, 0, 0, 0.0)),url(public/images/job.jpg); background-size: cover;
background-repeat: no-repeat;
background-position: center;
height: 800px">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="success-heading ">
				<div class="reviews-sec" id="reviews3">
					<div class="">
						<h3 style="font-size: 30px;">
							Success-login
						</h3>
					</div>
				</div>
			</div></div>
			
		</div>
	</div>
</section>

    <body>
<div class="container">
  <div class="success-login-section">
    <div class="row">
      <div class="col-md-8">
        <h2>You are successfully login</h2>
      </div>
      <div class="col-md-4">
        <a href="{{url('post-job')}}" class="success-job-btn"><i class="fas fa-plus"></i>Post Jobs</a>
        
      </div>
    </div>
  </div>
</div>
   
  

<footer class="ft">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 column">
                    <div class="widget">
                        <div class="about_widget">
                            <div class="logo">
                                <img class="img-fluid" src="{{url('public/images/fusion.jpg')}}">
                            </div>
                            <span><i class="fas fa-map-marker-alt"></i> balkumari,koteshwor, Nepal</span>

                            <span><i class="fas fa-pen-square"></i> GPO Box:8975, Kathmandu, Nepal.&nbsp;</span>

                            <span><i class="fas fa-phone"></i>5550634, 5555144, 5555180 </span>

                            <span><i class="fas fa-envelope"></i>Email:@gmail.com</span>

                        </div><!-- About Widget -->
                    </div>
                </div>
                <div class="col-lg-2 column">
                    <div class="widget">
                        <h3 class="footer-title">About.</h3>
                        <div class="link_widgets1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="/about" title="">About Us</a>
                                    <a href="/events" title="">Events</a>
                                    <a href="/galleries" title="">Gallery</a>
                                    <a href="/faqs/employer" title="">Job Seeker FAQ </a>
                                    <a href="/faqs/job-seeker" title="">Employer FAQ </a>
                                    <a href="/privacy-policy" title="">Privacy Policy </a>
                                    <a href="/terms-and-conditions" title="">Terms And Conditions </a>
                                    <a href="/companyprofile.pdf" title="" target="_blank">Company Profile </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 column">
                    <div class="widget">
                        <h3 class="footer-title">Explore.</h3>
                        <div class="link_widgets1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="/job-lists" title="">Jobs Categories</a>
                                    <a href="job-sub-categories" title="">Job Categories</a>
                                    <a href="job-sub-categories" title="">Job Sub Categories</a>
                                    <a href="/cvs" title="">Candidates</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 column">
                    <div class="widget">
                        <h3 class="footer-title">Subscribe to us.</h3>
                        <div class="subscribe_widget" style="margin-bottom: 50px">
                            <form>
                                <input type="text" placeholder="Enter Valid Email Address" style="color: black">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <h3 class="footer-title" style="margin-bottom: 20px;">Our Associate Companies.</h3>
                        <div class="row">
                        	<div class="col-md-3">
                        		<div class="footer-images">
                        			<img class="img-fluid" src="{{url('public/images/lucky.jpg')}}">
                        		</div>
                        	</div>
                        	<div class="col-md-3">
                        		<div class="footer-images">
                        			<img class="img-fluid" src="{{url('public/images/lucky.jpg')}}">
                        		</div>
                        	</div>
                        	<div class="col-md-3">
                        		<div class="footer-images">
                        			<img class="img-fluid" src="{{url('public/images/care.jpg')}}">
                        		</div>
                        	</div>
                        	<div class="col-md-3">
                        		<div class="footer-images">
                        			<img class="img-fluid" src="{{url('public/images/lucky.jpg')}}">
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="footer-Copyright-section">
  <div class="row">
    <div class="col-md-12 text-center">
      <p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by  <a href="https://echoinnovators.com" target="_blank" class="text-primary">Echo Innovators</a></p>
      </div>
    </div>
</div>
</footer>


  {{-- end footer --}}




<script src="jquery.2.min.js"></script>
<script src="owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  {{-- bootstrapp --}}
<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/js/owl.carousel.js')}}"></script>


  <!-- script -->
<script type="text/javascript" src="{{url('public/js/js.js')}}"></script>

 
<!-- Include js plugin -->

  {{-- all js --}}
    </body>
</html>
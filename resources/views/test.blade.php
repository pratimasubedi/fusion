{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>Laravel</title>

       <!-- Fonts -->
       <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900%7CPoppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">


       {{-- animate --}
       <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

       {{-- font-awesome --}
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

   <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>


        <style type="text/css">
            /*counter*/
.wedo-counter{
    width: 100%;
    background: var(--primary-color);
    padding:70px 0;
    margin-top: -40px;
}

.count
{
  line-height: 50px;
  color:white;
  /*margin-left:30px;*/
  font-size:44px;
  
}
.count-icon{
    color: #fff;
    margin-top: 20px;
}

.number-count{
    text-align: left;
}

.number-count span{
    display: block;
}

.number-count label{
        font-size: 15px;
    font-weight: 600;
    margin: 10px 0 0;
    position: relative;
    text-transform: uppercase;
    color: #fff;/*counter*/
}
.wedo-counter{
    width: 100%;
    background: var(--primary-color);
    padding:70px 0;
    margin-top: -40px;
}

.count
{ line-height: 50px;
  color:white;
  /*margin-left:30px;*/
  font-size:44px;
  
}
.count-icon{
    color: #fff;
    margin-top: 20px;
}

.number-count{
    text-align: left;
}

.number-count span{
    display: block;
}

.number-count label{
        font-size: 15px;
    font-weight: 600;
    margin: 10px 0 0;
    position: relative;
    text-transform: uppercase;
    color: #fff;
}

        </style>
</head>
<body>
{{-- <section class=".tips-cover" style="background:linear-gradient(rgba(0, 0, 0, .0),rgba(0, 0, 0, 0.0)),url(public/images/job.jpg); background-size: cover;
background-repeat: no-repeat;
background-position: center;
height: 800px"> --}
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="Tips-heading ">
                <div class="reviews-sec" id="reviews3">
                    <div class="">
                        <h3 style="font-size: 30px;">
                            Tips
                        </h3>
                    </div>
                </div>
            </div></div>
            <div class="Tips-heading ">

                <div class="col-md-12 col-lg-12">
                    <h6>Total 2 blogs posts</h6>
                </div>
            </div>
        </div>
    </div>
</section>

{{--  --}}



{{-- counter --}
<div class="container-fluid wedo-counter">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-3 col-sm-6 number-count">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <i class="fa fa-pencil-square-o count-icon fa-4x" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-9 col-sm-9">
                            <span class="count">5</span>
                            <label>Projects</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 number-count">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <i class="fa fa-user count-icon fa-4x" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-9 col-sm-9">
                            <span class="count">10</span>
                            <label>Satisfied Clients</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 number-count">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <i class="fa fa-calendar-check-o count-icon fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-9 col-sm-9">
                            <span class="count">300</span>
                            <label>Working Days</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 number-count">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <i class="fa fa-users count-icon fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-9 col-sm-9">
                            <span class="count">7</span>
                            <label>Members</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //     counter
$('.count').each(function () {
   $(this).prop('Counter',0).animate({
       Counter: $(this).text()
   }, {

       duration: 2000,
       easing: 'swing',
       step: function (now) {
           $(this).text(Math.ceil(now));
       }
   });
});
</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</script>
</html> --}}



    



<footer class="ft">
    <div class="block">
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
               
                <div class="col-lg-4 column">
                    <div class="widget">
                        <h3 class="footer-title">Explore.</h3>
                        <div class="link_widgets1">
                            <div class="row">
                                @foreach($footerlink as $link)
                                <div class="col-lg-12">
                                    <a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a>
                                    
                                </div>
                                @endforeach
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
                                <a href="{{ route('home.usercontact') }}"><button type="submit"><i class="fas fa-paper-plane"></i></button></a>
                            </form>
                        </div>
                        <h3 class="footer-title" style="margin-bottom: 20px;">Our Associate Companies.</h3>
                        <div class="row">
                            @foreach($footercompany as $footcompany)
                          <div class="col-md-3">
                            <div class="footer-images">
                              <img class="img-fluid" src="{{url('/uploads/'.$footcompany->image)}}">
                            </div>
                          </div>
                            @endforeach
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

  <!-- script -->
  <script type="text/javascript" src="{{url('public/js/js.js')}}"></script>

  {{-- all js --}}




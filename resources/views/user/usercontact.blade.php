

@extends('userlayout.user-main')
@section('usercontent')
@include('top-bg1-section')
<div class="container">
    <div class="pageTitleContainer">
        <div class="pageTitle">
            <h1>Title of the page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur a</p>
        </div>
    </div>
</div>
<section>
    <div class="container contact-section">
        <div class="row">
                <div class="container">
                    @if(Session::has('success') && !empty(Session::get('success')))
                       
                            <ul>
                                <div class="old">{{ Session::get('success')}}</div>
                            </ul>
                    @endif
                </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h3>Keep In Touch</h3>

  
        <form action="{{ route('home.usercontact') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <span class="pf-title">Full Name</span>
                    <div class="pf-field">
                        <input type="text" value="" name="name" placeholder="Your Name" required="required">
                        <i class="fas fa-user"></i>
                        <span class="text-color">

                            <br>
                        </span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <span class="pf-title">Email</span>
                    <div class="pf-field">
                        <input type="email" value="" name="email" placeholder="Your Email" required="required">
                        <i class="fas fa-envelope"></i>
                        <span class="text-color">

                            <br>
                        </span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <span class="pf-title">Phone Number</span>
                    <div class="pf-field">
                        <input type="text"  value="" name="phone" placeholder="Phone Number" required="required">
                        <i class="fas fa-phone"></i>
                        <span class="text-color">

                            <br>
                        </span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <span class="pf-title">Subject</span>
                    <div class="pf-field">
                        <input type="text"  value="" name="subject" placeholder="Subject" required="required">
                   <i class="fas fa-file"></i>
                        <span class="text-color">

                            <br>
                        </span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <span class="pf-title">Message</span>
                    <div class="pf-field">
                        <textarea placeholder="Message" name="message" required="required"></textarea>
                        <i class="fas fa-comment"></i>
                        <span class="text-color">

                            <br>
                        </span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <span class="pf-title"></span>
                    <div class="pf-field">
                        <div class="g-recaptcha" data-sitekey="6LdsbjoUAAAAAPAa6dTj7PjIK4AN_qNRGESAWtpU"></div>                                            <span class="text-color">

                            <br>
                        </span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button class="contact-us-send-button" type="submit">Send</button>
                </div>
            </div>
        </form>
</div>
</div>

<div class="col-lg-6">
    <div class="contact-text">
        <h3>Fusion Multi-Propose Pvt Ltd.</h3>
        <ul>
            <li>
                <i class="fas fa-map-marker-alt fa-2x"></i>
                <span>Balkumari,koteshwor, Nepal </span>
            </li>

            <li>
                <i class="fas fa-phone fa-2x"></i>
                <span>Call Us :980000000 </span>
            </li>
            <li>
                <i class="fas fa-envelope fa-2x"></i>
                <span>Email :Fusion multi-purpose@gmail.com</span></li>

            </ul>
        </div>
    </div>
</div>
</div>
</section>
@endsection 
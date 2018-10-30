@extends('layouts.app')

@section('content')

 	<!-- Page Header -->
    <div style="padding-top: 150px">
      <div class="container">
        <div class="row">
          <div class="col-md-6" style="padding-top: 66px">
            <h6 class="page-subtitle" style="color: ##0083ff">CONTACT US</h6>
            <h1 class="page-title" style="color: ##0083ff">Get In Touch</h1>
            
          </div>
          <div class="col-md-6" >
           <img  style="float: right; width: 75%" src="images/banner/contact_apoxy.png">
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact -->
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="contact-form-wrapper">
              <h3>Leave Message</h3>
              <form class="contact-form" id="contactForm">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Full name">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email address">
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Message"></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="primary-bg button">Submit Now</button>
                <p class="input-success">Your message has been sent. Thanks for contact.</p>
                <p class="input-error">Something went wrong while sending. Please try again.</p>
              </form>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="contact">
              <h3>Contact Details</h3>
              <div class="contact-list">
                <div class="contact-icon">
                  <span class="ti-location-pin"></span>
                </div>
                <div class="contact-details">
                  <span>322 Jaintfam St, Brookfields <br>NY 245 United States</span>
                </div>
              </div>
              <div class="contact-list">
                <div class="contact-icon">
                  <span class="ti-mobile"></span>
                </div>
                <div class="contact-details">
                  <span>(+01)-800-346-6277</span>
                  <span>1-677-124-44227</span>
                </div>
              </div>
              <div class="contact-list">
                <div class="contact-icon">
                  <span class="ti-email"></span>
                </div>
                <div class="contact-details">
                  <span>support@yourmail.com</span>
                  <span>info@markesia.com</span>
                </div>
              </div>
              <div class="contact-list">
                <div class="contact-icon">
                  <span class="ti-time"></span>
                </div>
                <div class="contact-details">
                  <span>Mon - Sat 8.00 - 18.00.</span>
                  <span>Sunday Closed</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

@endsection
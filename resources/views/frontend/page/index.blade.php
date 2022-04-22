@extends('frontend.layout.master')
@section('content')
<section class="banner_sec">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-7 align-self-center order-2 order--1">
            <div class="banner_content">
               <h2>Covid 19 RT-PCR Testing</h2>
               <h1>Results within   <span>24 hours</span> Four step process</h1>
               <ul>
                  <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"/></span>Find a location</li>
                  <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"/></span>Book an appointment</li>
                  <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"/></span>Get an RT-PCR Nasal Swab Test</li>
                  <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"/></span>Get notified to view your results</li>
               </ul>
               <a href="javascript:void(0)" class="btn btn-submit">Book Now</a>
               <a href="javascript:void(0)" class="btn btn-results ms-2">View My Results</a>
            </div>
         </div>
         <div class="col-md-5 order-1 order-md-2">
            <div class="banner_img">
               <img src="{{ asset('assets/img/banner1.png') }}"/>	
               <div class="banner-shape1"><img src="{{ asset('assets/img/shape7.svg') }}"/></div>
               <div class="banner-shape2"><img src="{{ asset('assets/img/shape3.svg') }}"/></div>
               <div class="banner-shape3"><img src="{{ asset('assets/img/shape4.svg') }}"/></div>
               <div class="banner-shape4"><img src="{{ asset('assets/img/shape5.svg') }}"/></div>
               <div class="banner-shape5"><img src="{{ asset('assets/img/shape6.svg') }}"/></div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="about-us">
   <div class="container">
      <div class="row  align-items-center">
         <div class="col-md-5  col-lg-5">
            <div class="about-img">
               <img src="{{ asset('assets/img/aboutimg.png') }}"/>
            </div>
         </div>
         <div class="col-md-7 col-md-7">
            <div class="about-content">
               <div class="section-heading">
                  <h2>About <span>Us</span></h2>
               </div>
               <p>Book an appointment with a physician at one of our partner locations and you will have your results within 24 hours!Book an appointment with a physician at one of our partner locations and you will have your results within 24 hours!</p>
               <p>Book an appointment with a physician at one of our partner locations and you will have your results within 24 hours!</p>
               <a href="about-us.html" class="btn btn-submit mt-3">Know More</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="nearest-location">
   <div class="container">
      <div class="section-heading text-center">
         <h2>Choose One Of Our <span>Location</span> Nearest You</h2>
         <p class="subtitle">Book an appointment with a physician at one of our partner locations and you will have your results within 24 hours!</p>
      </div>
      <div class="row gx-0">
         <div class="col-md-12 col-lg-6">
            <div id="map_canvas" class="map-home"></div>
         </div>
         <div class="col-md-12 col-lg-6">
            <div class="location-inner" ss-container>
               <div class="media d-flex align-items-center">
                  <div class="media-left flex-shrink-0  location1">
                     <img src="{{ asset('assets/img/logo1.png') }}" class="mr-3">
                  </div>
                  <div class="media-body flex-grow-1 ms-3">
                     <h2 class="mt-0">Salient Medical</h2>
                     <p><span class="fas fa-map-marker-alt"></span>15005 Shady Grove Rd #240 Rockville, MD 20850, USA</p>
                     <p><span class="fas fa-clock"></span>Mon to Fri: 9am - 5pm Sat: 9am - 12pm</p>
                     <p><span class="fas fa-phone"></span>(301) 217-0979</p>
                     <div class="btn-bottom text-end">
                        <a href="javascript:void(0)" class="me-4">Visit Website</a>
                        <button class="btn btn-submit btn-moreinfo">More Info</button> 
                     </div>
                  </div>
               </div>
               <div class="media d-flex align-items-center">
                  <div class="media-left flex-shrink-0  location2">
                     <img src="{{ asset('assets/img/logo2.png') }}" class="mr-3">
                  </div>
                  <div class="media-body flex-grow-1 ms-3">
                     <h2 class="mt-0">Hello Plus Pharma</h2>
                     <p><span class="fas fa-map-marker-alt"></span>15005 Shady Grove Rd #240 Rockville, MD 20850, USA</p>
                     <p><span class="fas fa-clock"></span>Mon to Fri: 9am - 5pm Sat: 9am - 12pm</p>
                     <p><span class="fas fa-phone"></span>(301) 217-0979</p>
                     <div class="btn-bottom text-end">
                        <a href="javascript:void(0)" class="me-4">Visit Website</a>
                        <button class="btn btn-submit btn-moreinfo">More Info</button> 
                     </div>
                  </div>
               </div>
               <div class="media d-flex align-items-center">
                  <div class="media-left flex-shrink-0  location3">
                     <img src="{{ asset('assets/img/logo3.png') }}" class="mr-3">
                  </div>
                  <div class="media-body flex-grow-1 ms-3">
                     <h2 class="mt-0">Salient Medical</h2>
                     <p><span class="fas fa-map-marker-alt"></span>15005 Shady Grove Rd #240 Rockville, MD 20850, USA</p>
                     <p><span class="fas fa-clock"></span>Mon to Fri: 9am - 5pm Sat: 9am - 12pm</p>
                     <p><span class="fas fa-phone"></span>(301) 217-0979</p>
                     <div class="btn-bottom text-end">
                        <a href="javascript:void(0)" class="me-4">Visit Website</a>
                        <button class="btn btn-submit btn-moreinfo">More Info</button> 
                     </div>
                  </div>
               </div>
               <div class="media d-flex align-items-center">
                  <div class="media-left flex-shrink-0  location1">
                     <img src="{{ asset('assets/img/logo1.png') }}" class="mr-3">
                  </div>
                  <div class="media-body flex-grow-1 ms-3">
                     <h2 class="mt-0">Salient Medical</h2>
                     <p><span class="fas fa-map-marker-alt"></span>15005 Shady Grove Rd #240 Rockville, MD 20850, USA</p>
                     <p><span class="fas fa-clock"></span>Mon to Fri: 9am - 5pm Sat: 9am - 12pm</p>
                     <p><span class="fas fa-phone"></span>(301) 217-0979</p>
                     <div class="btn-bottom text-end">
                        <a href="javascript:void(0)" class="me-4">Visit Website</a>
                        <button class="btn btn-submit btn-moreinfo">More Info</button> 
                     </div>
                  </div>
               </div>
               <div class="media d-flex align-items-center">
                  <div class="media-left flex-shrink-0  location2">
                     <img src="{{ asset('assets/img/logo2.png') }}" class="mr-3">
                  </div>
                  <div class="media-body flex-grow-1 ms-3">
                     <h2 class="mt-0">Hello Plus Pharma</h2>
                     <p><span class="fas fa-map-marker-alt"></span>15005 Shady Grove Rd #240 Rockville, MD 20850, USA</p>
                     <p><span class="fas fa-clock"></span>Mon to Fri: 9am - 5pm Sat: 9am - 12pm</p>
                     <p><span class="fas fa-phone"></span>(301) 217-0979</p>
                     <div class="btn-bottom text-end">
                        <a href="javascript:void(0)" class="me-4">Visit Website</a>
                        <button class="btn btn-submit btn-moreinfo">More Info</button> 
                     </div>
                  </div>
               </div>
               <div class="media d-flex align-items-center">
                  <div class="media-left flex-shrink-0  location3">
                     <img src="{{ asset('assets/img/logo3.png') }}" class="mr-3">
                  </div>
                  <div class="media-body flex-grow-1 ms-3">
                     <h2 class="mt-0">Salient Medical</h2>
                     <p><span class="fas fa-map-marker-alt"></span>15005 Shady Grove Rd #240 Rockville, MD 20850, USA</p>
                     <p><span class="fas fa-clock"></span>Mon to Fri: 9am - 5pm Sat: 9am - 12pm</p>
                     <p><span class="fas fa-phone"></span>(301) 217-0979</p>
                     <div class="btn-bottom text-end">
                        <a href="javascript:void(0)" class="me-4">Visit Website</a>
                        <button class="btn btn-submit btn-moreinfo">More Info</button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="howitworks">
   <div class="container">
      <div class="section-heading text-center">
         <h2>How <span>it works</span></h2>
         <p class="subtitle">Just 4 steps to schedule your vaccination appointment. Easy and simple for your convenience</p>
      </div>
      <div class="row">
         <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="howitworks-main border-shape1 text-center">
               <span class="howitworks-icon icon-shape1">
               <img src="{{ asset('assets/img/icon1.svg') }}"/>
               </span>
               <h2>Select your area</h2>
               <p>Choose the city convenient for you, the point of corona test and the desired tests</p>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="howitworks-main border-shape2 text-center">
               <span class="howitworks-icon icon-shape2">
               <img src="{{ asset('assets/img/icon2.svg') }}"/>
               </span>
               <h2>Choose slot</h2>
               <p>Choose a free time slot at your chosen corona test center that suits you</p>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="howitworks-main border-shape3 text-center">
               <span class="howitworks-icon icon-shape3">
               <img src="{{ asset('assets/img/icon3.svg') }}"/>
               </span>
               <h2>Personal info</h2>
               <p>Enter personal information, Get confirmation by email and SMS</p>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="howitworks-main text-center">
               <span class="howitworks-icon icon-shape4">
               <img src="{{ asset('assets/img/icon4.svg') }}"/>
               </span>
               <h2>Be on time</h2>
               <p>Come to the corona test center at a certain date and time with an ID card</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="contact-us">
   <div class="container">
      <form class="contactform" action="javascript:void(0)">
         <div class="section-heading text-center">
            <h2>Contact <span>Us</span></h2>
            <p class="subtitle">Just like our fast and accurate COVID-19 Rt-PCR test, we will get back to you within 24 hours!</p>
            <p class="subtitle2">Are you a medical provider looking to offer your patients a fast and reliable result?</p>
         </div>
         <div class="contactforminner">
            <div class="row ">
               <div class="col-md-6 col-sm-6">
                  <div class="form-group mb-3">
                     <input type="text" class="form-control" placeholder="First Name"/>
                  </div>
               </div>
               <div class="col-md-6  col-sm-6">
                  <div class="form-group mb-3">
                     <input type="text" class="form-control" placeholder="Last Name"/>
                  </div>
               </div>
               <div class="col-md-6  col-sm-6">
                  <div class="form-group mb-3">
                     <input type="tel" class="form-control" placeholder="Phone Number"/>
                  </div>
               </div>
               <div class="col-md-6  col-sm-6">
                  <div class="form-group mb-3">
                     <input type="email" class="form-control" placeholder="Email Id"/>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-40">
                     <textarea  class="form-control" rows="5" placeholder="Tell us about your testing needs"></textarea>
                  </div>
               </div>
               <div class="col-md-12 text-center">
                  <div class="form-group">
                     <button class="btn btn-submit">Submit</button>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</section>
@endsection
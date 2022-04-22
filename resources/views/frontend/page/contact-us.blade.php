@extends('frontend.layout.master')
@section('content')
<section class="breadcrumb_sec">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="breadcrumb_content text-center">
               <h1>Contact  <span>Us</span></h1>
               <nav class="breadcrumb-row mt-4">
               <ul class="breadcrumb">
               <li class="breadcrumb-item">
               <a href="index.html">
               <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
               </li>
               <li class="breadcrumb-item active" 
               >Contact Us</li></ul></nav>
            </div>
         </div>
      
      </div>
      
      <img class="pt-img1 animate-wave" src="{{ asset('assets/img/wave1.png') }}" alt=""/>
      <img class="pt-img2 animate2" src="{{ asset('assets/img/wave2.png') }}" alt=""/>
      <img class="pt-img3 animate-rotate" src="{{ asset('assets/img/wave3.png') }}" alt=""/>
   </div>
</section>
 
 <section class="contact-us contact_page">
    <div class="container">
        <form class="contactform" action="javascript:void(0)">
     <div class="row">
        <div class="col-md-12 col-lg-6">
        <div class="section-heading">
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
              <div class="col-md-6 col-sm-6">
                  <div class="form-group mb-3">
                    <input type="text" class="form-control" placeholder="Last Name"/>
                  </div>
             </div>
              <div class="col-md-6 col-sm-6">
                  <div class="form-group mb-3">
                    <input type="tel" class="form-control" placeholder="Phone Number"/>
                  </div>
             </div>
              <div class="col-md-6 col-sm-6">
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
       </div>
       <div class="col-md-12 col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.0540608992237!2d-73.98372238522619!3d40.73883594391133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2590a3fffffff%3A0x84cd7d4d36452c0d!2spandorabox!5e0!3m2!1sen!2sin!4v1648531575455!5m2!1sen!2sin" width="100%" height="574" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
      </div>
       </form>
    </div>
 </section>
 
 <section class="contact-info">
    <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-4 col-sm-6">
                  <div class="feature-container">
                    <div class="icon-md feature-icon"><img src="{{ asset('assets/img/phone.png') }}"/></div>
                       <div class="icon-content">
                       <h5 class="ttr-title">Contact Number</h5>
                       <p>+91 123 456 790</p>
                       <p>+91 3424 44 00</p>
                    </div>
                  </div>
             </div>
              <div class="col-md-4 col-sm-6">
                  <div class="feature-container">
                    <div class="icon-md feature-icon"><img src="{{ asset('assets/img/email.png') }}"/></div>
                       <div class="icon-content">
                       <h5 class="ttr-title">Email Address</h5>
                       <p>covid@example.com</p>
                       <p>covidclinic@example.com</p>
                    </div>
                  </div>
             </div>
              <div class="col-md-4 col-sm-6">
                  <div class="feature-container">
                    <div class="icon-md feature-icon"><img src="{{ asset('assets/img/address.png') }}"/></div>
                       <div class="icon-content">
                       <h5 class="ttr-title">Address</h5>
                       <p>2005 Stokes Isle Apt. 896, Venaville 10010, USA</p>
                    </div>
                  </div>
             </div>
           </div>
    </div>
 </section>
@endsection
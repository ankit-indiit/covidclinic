@extends('frontend.layout.master')
@section('content')
<section class="breadcrumb_sec">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="breadcrumb_content text-center">
               <h1>About  <span>Us</span></h1>
               <nav class="breadcrumb-row mt-4">
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="index.html">
                           <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                              <polyline points="9 22 9 12 15 12 15 22"></polyline>
                           </svg>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item active" 
                        >About Us</li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <img class="pt-img1 animate-wave" src="{{ asset('assets/img/wave1.png') }}" alt=""/>
      <img class="pt-img2 animate2" src="{{ asset('assets/img/wave2.png') }}" alt=""/>
      <img class="pt-img3 animate-rotate" src="{{ asset('assets/img/wave3.png') }}" alt=""/>
   </div>
</section>
<section class="about-us aboutus_page">
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
               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="howitworks howitworks_page">
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
<section class="about-us2">
   <div class="container">
      <div class="row  align-items-center">
         <div class="col-md-7 col-md-7">
            <div class="about-content">
               <div class="section-heading">
                  <h2>Who We <span>Are</span></h2>
               </div>
               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur</p>
               <p>Book an appointment with a physician at one of our partner locations and you will have your results within 24 hours!</p>
               <ul>
                  <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"></span>Lorem ipsum dolor sit amet</li>
                  <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"></span>Sed ut perspiciatis unde omnis iste natus</li>
                  <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"></span>Sed quia consequuntur magni dolores </li>
                  <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"></span>Ut enim ad minima veniam</li>
               </ul>
            </div>
         </div>
         <div class="col-md-5  col-lg-5">
            <div class="about-img">
               <img src="{{ asset('assets/img/aboutimg3.png') }}"/>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
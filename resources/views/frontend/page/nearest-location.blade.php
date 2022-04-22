@extends('frontend.layout.master')
@section('content')
<section class="breadcrumb_sec">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="breadcrumb_content text-center">
               <h1>Nearest  <span>Location</span></h1>
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
                        >Nearest Location</li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <img class="pt-img1 animate-wave" src="{{ asset('assets/img/wave1.png' ) }}" alt=""/>
      <img class="pt-img2 animate2" src="{{ asset('assets/img/wave2.png' ) }}" alt=""/>
      <img class="pt-img3 animate-rotate" src="{{ asset('assets/img/wave3.png' ) }}" alt=""/>
   </div>
</section>
<!-- Breadcrumb End -->
<!-- Nearest Location Start --> 
<section class="nearest-location nearestlocation_page">
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
                     <img src="{{ asset('assets/img/logo1.png' ) }}" class="mr-3">
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
                     <img src="{{ asset('assets/img/logo2.png' ) }}" class="mr-3">
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
                     <img src="{{ asset('assets/img/logo3.png' ) }}" class="mr-3">
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
                     <img src="{{ asset('assets/img/logo1.png' ) }}" class="mr-3">
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
                     <img src="{{ asset('assets/img/logo2.png' ) }}" class="mr-3">
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
                     <img src="{{ asset('assets/img/logo3.png' ) }}" class="mr-3">
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
@endsection
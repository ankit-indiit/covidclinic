<section class="breadcrumb_sec">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-12">
            @php
               if (Route::currentRouteName() == 'clinic-patient') {
                  $title = 'Add Patient';
               } elseif (Route::currentRouteName() == 'patients') {
                  $title = 'Patients';
               } elseif (Route::currentRouteName() == 'edit-patient') {
                  $title = 'Edit Patients';
               } elseif (Route::currentRouteName() == 'patient-reports' || Route::currentRouteName() == 'reports') {
                  $title = 'Reports';
               } elseif (Route::currentRouteName() == 'report-detail') {
                  $title = 'Report Detail';
               } elseif (Route::currentRouteName() == 'add-report-form') {
                  $title = 'Add Patient Report';
               } elseif (Route::currentRouteName() == 'edit-patient-report') {
                  $title = 'Edit Patient Report';
               } elseif (Route::currentRouteName() == 'clinic.profile') {
                  $title = 'Profile';
               }         
            @endphp
            <div class="breadcrumb_content text-center">
               <h1>{{ @$title }}</h1>
               {{-- {{Route::currentRouteName()}} --}}
               <nav class="breadcrumb-row mt-4">
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item">                        
                        <a href="javascript:void(0);">
                           <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                              <polyline points="9 22 9 12 15 12 15 22"></polyline>
                           </svg>
                           {{ ucfirst(Auth::user()->role) }}
                        </a>                        
                     </li>
                     <li class="breadcrumb-item active">{{ @$title }}</li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <img class="pt-img1 animate-wave" src="img/wave1.png" alt="">
      <img class="pt-img2 animate2" src="img/wave2.png" alt="">
      <img class="pt-img3 animate-rotate" src="img/wave3.png" alt="">
   </div>
</section>
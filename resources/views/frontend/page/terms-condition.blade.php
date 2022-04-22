@extends('frontend.layout.master')
@section('content')
<section class="breadcrumb_sec">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="breadcrumb_content text-center">
               <h1>Terms & <span>Conditions</span></h1>
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
                        >Terms & Conditions</li>
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
<section class="terms-conditions">
   <div class="container">
      <div class="terms-content">
         <h2><span class="termsno">1.</span> <span class="termstext">What PHI We <span class="termstext2">Collect</span></span></h2>
         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
         <h2 class="mt-5"><span class="termsno">2.</span> <span class="termstext">How We May Use and Disclose  <span class="termstext2">Protected Health</span> Information About You Without Your Consent</span></h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
         <h2 class="mt-5"><span class="termsno">3.</span> <span class="termstext">Use and <span class="termstext2">Disclosure </span> of PHI </span></h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
         <ul>
            <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
            <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"></span>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</li>
            <li><span class="icon-check"><img src="{{ asset('assets/img/check.svg') }}"></span>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</li>
         </ul>
         <h2 class="mt-5"><span class="termsno">4.</span> <span class="termstext">Complaints <span class="termstext2">/Objections </span></span></h2>
         <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
         <ol>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
            <li>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</li>
            <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</li>
         </ol>
         <h2 class="mt-5"><span class="termsno">5.</span> <span class="termstext">How to Contact<span class="termstext2"> Us</span></span></h2>
         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
      </div>
   </div>
</section>
@endsection
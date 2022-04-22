@extends('frontend.layout.master')
@section('content')
<section class="breadcrumb_sec">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="breadcrumb_content text-center">
               <h1>FAQ</h1>
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
                        >FAQ</li>
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
<section class="FAQ">
   <div class="container">
      <div class="section-heading text-center mb-5">
         <h2>Frequently Asked <span>Questions</span></h2>
         <p class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      </div>
      <div class="row">
         <div class="col-md-12  col-lg-12">
            <div class="accordion" id="accordionExample">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Where can I find information on lorem porem?
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <strong>Sed ut perspiciatis</strong> unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     How Porem Can Ease Your Lorem?
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <strong>Ut enim ad minima veniam</strong> unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     What types of sitamet do you support?
                     </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <strong>Lorem ipsum dolor sit amet,</strong>  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne1">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                     Where duis aute irure dolor in reprehenderit in voluptate velit ?
                     </button>
                  </h2>
                  <div id="collapseOne1" class="accordion-collapse collapse " aria-labelledby="headingOne1" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <strong>Sed ut perspiciatis</strong> unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo1">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                     How excepteur sint occaecat cupidatat non proident ?
                     </button>
                  </h2>
                  <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <strong>Ut enim ad minima veniam</strong> unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree1">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                     What ipsum dolor sit amet, consectetur adipiscing elit ?
                     </button>
                  </h2>
                  <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <strong>Lorem ipsum dolor sit amet,</strong>  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
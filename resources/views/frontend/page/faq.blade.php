@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb', [
  'title' => 'FAQ',
  'home' => route('home'),
])
<section class="FAQ">
   <div class="container">
      <div class="section-heading text-center mb-5">
         <h2>Frequently Asked <span>Questions</span></h2>
         <p class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      </div>
      <div class="row">
         <div class="col-md-12  col-lg-12">
            <div class="accordion" id="accordionExample">
               @foreach ($faqs as $faq)
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="heading{{ $faq->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                           {{ $faq->question }}
                        </button>
                     </h2>
                     <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse " aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           {{ $faq->answer }}
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb', [
  'title' => 'About Us',
  'home' => route('home'),
])
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
               {!! $data->desc['about_us'] !!}
            </div>
         </div>
      </div>
   </div>
</section>
<section class="howitworks howitworks_page">
   <div class="container">
      <div class="section-heading text-center">
         {!! $home->desc['how_it_works'] !!}
      </div>
      <div class="row">
         <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="howitworks-main border-shape1 text-center">
               <span class="howitworks-icon icon-shape1">
               <img src="{{ asset("images/how-it-works") }}/{{ $home->desc['first_image'] }}"/>
               </span>
               <h2>{{ $home->desc['first_title'] }}</h2>
               <p>{{ $home->desc['first_sub_title'] }}</p>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="howitworks-main border-shape2 text-center">
               <span class="howitworks-icon icon-shape2">
               <img src="{{ asset("images/how-it-works") }}/{{ $home->desc['second_image'] }}"/>
               </span>
               <h2>{{ $home->desc['second_title'] }}</h2>
               <p>{{ $home->desc['second_sub_title'] }}</p>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="howitworks-main border-shape3 text-center">
               <span class="howitworks-icon icon-shape3">
               <img src="{{ asset("images/how-it-works") }}/{{ $home->desc['third_image'] }}"/>
               </span>
               <h2>{{ $home->desc['third_title'] }}</h2>
               <p>{{ $home->desc['third_sub_title'] }}</p>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="howitworks-main text-center">
               <span class="howitworks-icon icon-shape4">
               <img src="{{ asset("images/how-it-works") }}/{{ $home->desc['fourth_image'] }}"/>
               </span>
               <h2>{{ $home->desc['fourth_title'] }}</h2>
               <p>{{ $home->desc['fourth_sub_title'] }}</p>
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
               {!! $data->desc['who_we_are'] !!}
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
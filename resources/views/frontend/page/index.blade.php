@extends('frontend.layout.master')
@section('content')
<section class="banner_sec">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-7 align-self-center order-2 order--1">
            <div class="banner_content">             
               {!! $home->desc['description'] !!}              
               <a href="{{ $home->desc['book_now'] }}" class="btn btn-submit">Book Now</a>
               <a href="{{ route('patient-login') }}" class="btn btn-results ms-2">View My Results</a>
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
                {!! $home->desc['about'] !!}
               <a href="{{ route('about-us') }}" class="btn btn-submit mt-3">Know More</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="nearest-location" id="nearestLocation">
   <div class="container">
      <div class="section-heading text-center">        
         <h2>{{ $locationTitle->desc['title'] }}</h2>
         <p class="subtitle">{{ $locationTitle->desc['sub_title'] }}</p>
      </div>
      <div class="row gx-0">
         <div class="col-md-12 col-lg-6">
            <div id="map_canvas" class="map-home"></div>
         </div>
         <div class="col-md-12 col-lg-6">
            <div class="location-inner" ss-container>
               @foreach ($locations as $location)
                 <div class="media d-flex align-items-center">
                    <div class="media-left flex-shrink-0  location1">
                       <img src="{{ $location->image }}" class="mr-3">
                    </div>
                    <div class="media-body flex-grow-1 ms-3">
                       <h2 class="mt-0">{{ $location->title }}</h2>
                       <p><span class="fas fa-map-marker-alt"></span>{{ $location->address }}</p>
                       <p><span class="fas fa-clock"></span>{{ $location->working_hour }}</p>
                       <p><span class="fas fa-phone"></span>{{ $location->mobile_no }}</p>
                       <div class="btn-bottom text-end">
                          <a href="{{ $location->link }}" class="me-4">Visit Website</a>
                          <button class="btn btn-submit btn-moreinfo">More Info</button> 
                       </div>
                    </div>
                 </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<section class="howitworks">
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
<section class="contact-us pb_100">
   <div class="container">
         <div class="section-heading text-center">
            <h2>Contact <span>Us</span></h2>
            <p class="subtitle">Just like our fast and accurate COVID-19 Rt-PCR test, we will get back to you within 24 hours!</p>
            <p class="subtitle2">Are you a medical provider looking to offer your patients a fast and reliable result?</p>
         </div>
         <div class="contactforminner">
             {{ Form::open(['url' => route('contact'), 'id' => 'contactUsForm', 'class' => '']) }}
                <div class="row ">                    
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group mb-3">
                        {{ Form::text('first_name', '', ['class' => 'form-control', 'id' => '', 'placeholder' => 'First Name']) }}
                      </div>
                   </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group mb-3">
                        {{ Form::text('last_name', '', ['class' => 'form-control', 'id' => '', 'placeholder' => 'Last Name']) }}
                      </div>
                   </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group mb-3">
                        {{ Form::text('phone_number', '', ['class' => 'form-control', 'id' => '', 'placeholder' => 'Phone Number']) }}
                      </div>
                   </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group mb-3">
                        {{ Form::text('email', '', ['class' => 'form-control', 'id' => '', 'placeholder' => 'Email Id']) }}
                      </div>
                   </div>             
                   <div class="col-md-12">
                      <div class="form-group mb-40">
                        {{ Form::textarea('message', '', ['class' => 'form-control', 'rows' => '5', 'placeholder' => 'Tell us about your testing needs']) }}
                      </div>
                   </div>
                    <div class="col-md-12 text-center">
                      <div class="form-group">
                        {{ Form::submit('Submit', ['class' => 'btn btn-submit', 'id' => 'contactUsFormBtn']) }}
                      </div>
                   </div>
                </div>
              {{ Form::close() }}
         </div>
   </div>
</section>
@endsection
@section('customScript')
<script type="text/javascript">  
  $("#contactUsForm").validate({
    rules: {
       first_name: {
          required: true,
       },
       last_name: {
          required: true,
       },
       phone_number: {
          required: true,
          number: true
       },            
       email: {
          required: true,
          email: true
       },
       messages: {
          required: true,
       },
    },
    messages: {
       first_name: "Please enter your first name",
       last_name: "Please enter your last name",
       phone_number: {
          required: "Please provide your phone number",
          number: "only numeric values are allowed"
       },
       email: "Please enter your email",
       messages: "Please enter your messages",
    },
    submitHandler: function(form) {
       var serializedData = $(form).serialize();
       $("#err_mess").html('');
       $('#contactUsFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: "{{ route('contact') }}",
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             $('#contactUsFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.reload();
                });
             } else {
                swal("", data.message, "error", {
                   button: "close",
                });
             }
          }
       });
       return false;
    }
 });
</script>
@endsection
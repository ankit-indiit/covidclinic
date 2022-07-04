@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb', [
  'title' => 'Contact Us',
  'home' => route('home'),
])
 <section class="contact-us contact_page">
    <div class="container">       
     <div class="row">
        <div class="col-md-12 col-lg-6">
        <div class="section-heading">
          {!! $data->desc['contact_us'] !!}          
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
       <div class="col-md-12 col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.0540608992237!2d-73.98372238522619!3d40.73883594391133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2590a3fffffff%3A0x84cd7d4d36452c0d!2spandorabox!5e0!3m2!1sen!2sin!4v1648531575455!5m2!1sen!2sin" width="100%" height="574" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
      </div>
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
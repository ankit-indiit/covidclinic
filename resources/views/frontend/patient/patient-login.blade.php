@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb', [
  'title' => 'Patient Login',
  'home' => route('home'),
])
<section class="login ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-5 col-lg-6">
            <img src="{{ asset('assets/img/patients.png') }}"/>
         </div>
         <div class="col-md-7 col-lg-6">
            {{ Form::open(['url' => route('patient.login'), 'id' => 'patientloginform', 'class' => 'loginform']) }}
               <input type="hidden" name="role" value="patient">
               <div class="login-head">
                  <h2><span class="loginicon"><img src="{{ asset('assets/img/patient-icon1.png') }}"/></span>Login <span  class="logintext">Now</span></h2>
                  <p>Please enter the information below to access patient dashboard.</p>
               </div>
               <div class="form-group mb-3">
                  {{ Form::text('phone_number', '', ['class' => 'form-control', 'id' => '', 'placeholder' => 'Phone Number']) }}
               </div>
               <div class="form-group mb-3">
                  {{ Form::text('dob', '', ['class' => 'form-control dob', 'id' => '', 'placeholder' => 'DOB', 'readonly']) }}
               </div>                           
               <div class="form-group">
                  {{ Form::submit('Login', ['class' => 'btn btn-submit']) }}
               </div>
            {{ Form::close() }}                       
        </div>
      </div>
   </div>
</section>
@endsection
@section('customScript')
{{-- <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script> --}}
<script type="text/javascript">
$('.dob').datepicker({
   format: "dd/mm/yyyy",
   endDate: '+0d',
   calendarWeeks: true,
   beforeShowYear: function(date){
      if (date.getFullYear() == 2007) {
         return false;
      }
   }
});
$("#patientloginform").validate({
rules: {
   phone_number: {
      required: true,
      number: true
   },
   dob: {
      required: true,
   },
},
messages: {
    phone_number: {
      required: "Please provide your phone number",
      number: "only numeric values are allowed"
   },
   
   dob: "Please enter your date of birth",
},
});
</script>
@endsection
@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb', [
  'title' => 'Clinic Login',
  'home' => route('home'),
  'subTitle' => 'Please enter the information below to access clinic dashboard'
])
<section class="login ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-5 col-lg-6">
            <img src="{{ asset('assets/img/clinic-img.png') }}"/>
         </div>
         <div class="col-md-7 col-lg-6">
         	{{ Form::open(['url' => route('login'), 'id' => 'clinicloginform', 'class' => 'loginform']) }}
               <div class="login-head">
                  <h2><span class="loginicon"><img src="{{ asset('assets/img/clinic.png') }}"/></span>Login <span  class="logintext">Now</span></h2>
                  <p>Please enter the information below to access clinic dashboard.</p>
               </div>
               <input type="hidden" name="role" value="clinic">
               <div class="form-group mb-3">
                  {{ Form::text('email', '', ['class' => 'form-control', 'id' => '', 'placeholder' => 'User Name']) }}
               </div>
               <div class="form-group mb-3">
                  {{ Form::password('password', ['class' => 'form-control', 'id' => '', 'placeholder' => 'Password']) }}
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
<script type="text/javascript">  
  $("#clinicloginform").validate({
    rules: {
       email: {
          required: true,
          email: true
       },
       password: {
          required: true,
       },
    },
    messages: {
       email: "Please enter your email",
       password: "Please enter your password",
    },
 });
</script>
@endsection
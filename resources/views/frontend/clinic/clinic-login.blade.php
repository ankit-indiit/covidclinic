@extends('frontend.layout.master')
@section('content')
<section class="breadcrumb_sec">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="breadcrumb_content text-center">
               <h1>Clinic  <span>Login</span></h1>
                  <p>Please enter the information below to access clinic dashboard.</p>
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
                        >Patient Login</li>
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
<section class="login ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-5 col-lg-6">
            <img src="{{ asset('assets/img/clinic-img.png') }}"/>
         </div>
         <div class="col-md-7 col-lg-6">
         	{{ Form::open(['url' => route('login'), 'id' => '', 'class' => 'loginform']) }}
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
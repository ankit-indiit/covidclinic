<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>Covid Clinic - Index</title>
      <link href="{{ asset('assets/css/bootstrap.min.cs') }}s" rel="stylesheet">
      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/simple-scrollbar.cs') }}s" rel="stylesheet" >
      <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
      <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" sizes="16x16" type="image/png">
      <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
      <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
      <script>
         var _baseURL = '{{ url('/') }}';
      </script>
   </head>
   <body>
      <header id="myHeader">
         <nav class="navbar navbar-expand-md p-0">
            <div class="container container-xxl">
               <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}"/></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <img src="{{ asset('assets/img/toggleNavbar.svg') }}">
               </button>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav mx-auto">
                     <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'home' ? 'active' : '' }}"  href="{{ route('home') }}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'about-us' ? 'active' : '' }}" href="{{ route('about-us') }}">About Us </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'nearest-location' ? 'active' : '' }}" href="{{ route('nearest-location') }}">Nearest Location</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'contact-us' ? 'active' : '' }}" href="{{ route('contact-us') }}">Contact Us</a>
                     </li>
                  </ul>
                  @if ( @Auth::user())
                     @if (Auth::user()->role == 'clinic')
                        <ul class="navbar-nav ms-auto">
                           <li class="nav-item dropdown">
                              <a class="nav-link userimg dropdown-toggle" href="javascript:void(0)"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="{{  Auth::user()->image }}"/><span>{{ Auth::user()->first_name }}</span></a>
                               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="{{ route('clinic.profile') }}"><i class="fa fa-user-alt"></i> Edit Profile</a></li>
                                 <li><a class="dropdown-item" href="{{ route('patients') }}"><i class="fa fa-users"></i> Patients</a></li>
                                 <li>
                                    <form action="{{ route('logout') }}" method="post">
                                       @csrf
                                       <button type="submit" class="dropdown-item"><i class="fa fa-sign-out-alt"></i> Logout</button>
                                    </form>
                                 </li>
                              </ul>
                           </li>                      
                        </ul>
                     @else
                        <ul class="navbar-nav ms-auto">
                           <li class="nav-item dropdown">
                              <a class="nav-link userimg dropdown-toggle" href="javascript:void(0)"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="{{  Auth::user()->image }}"/><span>{{ Auth::user()->first_name }}</span></a>
                               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="{{ route('reports') }}"><i class="fa fa-users"></i> Reports</a></li>
                                 <li>
                                    <form action="{{ route('logout') }}" method="post">
                                       @csrf
                                       <button type="submit" class="dropdown-item"><i class="fa fa-sign-out-alt"></i> Logout</button>
                                    </form>
                                 </li>
                              </ul>
                           </li>                      
                        </ul>
                     @endif
                  @else
                     <ul class="navbar-nav ms-auto">                        
                        <li class="nav-item">
                           <a class="nav-link patientlogin" href="{{ route('patient-login') }}">Patient Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-login"  href="{{ route('clinic') }}">Clinic Login</a>
                        </li>
                     </ul>
                  @endif
               </div>
            </div>
         </nav>
      </header>      
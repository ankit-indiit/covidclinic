<div class="sidebar" id="sidebar">
    <div class="sidebar-logo">      
        <a href="{{ route('profile') }}">
            <img src="assets/img/logo.png" class="img-fluid" alt="">
        </a>
    </div>
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 289px;"><div class="sidebar-inner slimscroll" style="overflow: hidden; width: 100%; height: 339px;">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
               {{--  <li class="active">
                    <a href="index.php"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                </li> --}}
                <li class="submenu">
                    <a href="javascript:void(0);" class=""><i class="fas fa-users"></i> <span> Users </span> <span class="menu-arrow pl-4"></span></a>
                    <ul style="display: none;">
                    <li><a href="{{ route('users', 'clinic') }}"> Clinic </a></li>
                    <li><a href="{{ route('users', 'patient') }}"> Patient </a></li>                    
                    </ul>
                </li>                

                <li class="submenu">
                    <a href="#" class=""><i class="fas fa-file"></i> <span> Pages </span> <span class="menu-arrow pl-4"></span></a>
                    <ul style="display: none;">
                    <li><a href="{{ route('home.index') }}"> Home </a></li>
                    <li><a href="{{ route('about.us') }}"> About Us </a></li>
                    <li><a href="{{ route('nearest-location.index') }}">Nearest Location </a></li>
                    <li><a href="{{ route('contact.us-page') }}"> Contact Us Page </a></li>
                    </ul>
                </li>                
                {{-- <li class="submenu">
                    <a href="#" class=""><i class="fas fa-user-lock"></i> <span> FAQ </span> <span class="menu-arrow pl-4"></span></a>
                    <ul style="display: none;">                   
                    
                    </ul>
                </li> --}}
                {{-- <li class="">
                    <a href="notifications.php"><i class="fas fa-bell"></i> <span>Notifications</span></a>
                </li> --}}
                <li class="">
                    <a href="{{ route('profile') }}"><i class="fas fa-id-badge"></i> <span>Profile Settings</span></a>
                </li>
                <li class="">
                    <li>
                        <a href="{{ route('contact.us') }}">
                            <i class="fas fa-id-card"></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
                </li>
                <li class="">
                    <li><a href="{{ route('news.letter') }}">
                        <i class="fas fa-newspaper"></i> 
                        <span>News Letter</span>
                    </a>
                    </li>
                </li>
                {{-- <li class="">
                    <li><a href=""> Terms & Conditions </a></li>
                </li> --}}
                <li class="">
                    <li>
                        <a href="{{ route('faq.index') }}">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <span>FAQ Page</span>                             
                        </a>
                    </li>
                </li>
                
                <!--   <li class="submenu">
                    <a href="#"><i class="fab fa-wpforms"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                        <li><a href="form-input-groups.html">Input Groups </a></li>
                        <li><a href="form-horizontal.html">Horizontal Form </a></li>
                        <li><a href="form-vertical.html"> Vertical Form </a></li>
                        <li><a href="form-mask.html"> Form Mask </a></li>
                        <li><a href="form-validation.html"> Form Validation </a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 593.772px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</div>
<!-- Header -->
<div class="header">

    <!-- Logo -->
    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="{{asset('./assets/img/CodLogic.png')}}" alt="Logo">
        </a>
        <a href="" class="logo logo-small">
            <img src="{{asset('./assets/img/CodLogic.png')}}" alt="Logo" width="10" height="30">
        </a>
    </div>
    <!-- /Logo -->

    <a href="javascript:void(0);" id="toggle_btn" style="margin-left: 34px">
        <i class="fe fe-text-align-left"></i>
    </a>

    <div class="top-nav-search">
        <marquee><p style="font-size: 20px; text-decoration: none;margin-right: 30px;  margin-top: 15px">Developed with 💖. The future is CodLogic &#128522;.</p></marquee>
    </div>


    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->

    <!-- Header Right Menu -->
    <ul class="nav user-menu">

        <li id="clock"  style="font-size: 20px; text-decoration: none; margin-top: 15px">Time</li>
        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="{{asset('./assets/img/profiles/avatar-01.jpg')}}" width="31" alt="Ryan Taylor"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{asset('./assets/img/profiles/avatar-01.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>Ryan Taylor</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <a class="dropdown-item" href="login.html">Logout</a>
            </div>
        </li>
        <!-- /User Menu -->

    </ul>
    <!-- /Header Right Menu -->

</div>
<!-- /Header -->
@include('partials.time')

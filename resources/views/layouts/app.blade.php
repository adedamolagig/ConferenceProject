<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Auto Mega Conference') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/animatedText.css') }} ">
</head>
<body>
    <div id="app">



       <!--  <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <span style="font-weight: 1000; font-family: Apple Chancery; font-size: 30px;"> <span style="font-family: Courier; "></span> 2018 National Automotive Engineering System Mega Conference 10th - 13th April @ Academy Inn, Lateef Jakande, Ikeja, Lagos. </span>
        </nav> -->

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <span style="font-weight: ; font-family: Apple Chancery; font-size: 30px;"> <span style="font-family: Courier; "></span> <img src="{{ asset('images/megaauto2018-logo.png')}}" width="100%"> </span>
        </nav>

         <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <span style="font-weight: 1000; font-family: Apple Chancery; font-size: 30px;"> <span style="font-family: Courier; ">Theme:</span> "Transmodal Application of Automotive Engines in Logistics and Mass Transportation: Responsibilities Challenges and Opportunities" </span>
        </nav>






        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'AUTOENGMEGACONFERENCE') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <!-- <li><a href="#">About us</a></li> -->
                            <li><a href="#">Schedule</a></li>
                            <li><a href="#">Hotel Accomodation</a></li>
                            <li><a href="#">Networking</a></li>
                            <li><a href="#">Internatinal Attendees</a></li>
                            <li><a href="#">Powerful Young Professional</a></li>
                            <!-- <li><a href=" {{ route('contact') }} ">Contact us</a></li> -->
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Photographs</a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exhibition<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Become and Exhibitor</a></li>
                            <li><a href="#">Interactive floor Plan</a></li>
                            <li><a href="#">Exhibitor List</a></li>
                            <li><a href="#">Become a Sponsor</a></li>
                            
                          </ul>
                        </li>
                       <!--  <li class="nav-item">
                          <a class="nav-link" href="#">Conference</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('contact') }} ">Contact Us</a>                            
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('aim') }} ">Aim</a>                            
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Objective</a>                            
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('subThemes') }} ">Sub-Themes</a>                            
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src=" {{ asset('js/animatedText.js') }} "></script>
</body>
</html>

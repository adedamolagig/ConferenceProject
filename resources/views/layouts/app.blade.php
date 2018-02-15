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
</head>
<body>
    <div id="app">


        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <span style="font-weight: 1000; font-family: Herculanum; font-size: 35px;"> 2018 National Mega Conference on applications of automotive engineering systems. </span>
        </nav>

         <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <span style="font-weight: 1000; font-family: Apple Chancery; font-size: 35px;"> "Transmodal Application of Automotive Engines in Logistics and Mass Transportation: Responsibilities Challenges and Opportunities" </span>
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
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event Info<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Schedule</a></li>
                            <li><a href="#">Hotel & Travel</a></li>
                            <li><a href="#">Networking</a></li>
                            <li><a href="#">Internatinal Attendees</a></li>
                            <li><a href="#">Powerful Young Professional</a></li>
                            <li><a href="#">Contact us</a></li>
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
                        <li class="nav-item">
                          <a class="nav-link" href="#">Conference</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rates</a>                            
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
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85350869-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-85350869-2');
    </script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Auto Mega Conference') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/animatedText.css') }} ">

    <style type="text/css">
        img {
            max-width: 100%;
            height: auto;
            width: auto\9; /* ie8 */
        }
    </style>

</head>
<body>
    <div id="app">

      

       <!--  <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <span style="font-weight: 1000; font-family: Apple Chancery; font-size: 30px;"> <span style="font-family: Courier; "></span> 2018 National Automotive Engineering System Mega Conference 10th - 13th April @ Academy Inn, Lateef Jakande, Ikeja, Lagos. </span>
        </nav> -->

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <span style="font-weight: ; font-family: Apple Chancery; font-size: 30px;"> <span style="font-family: Courier; "></span> <img src="{{ asset('images/megaauto2018.png')}}" > </span>
            </div>
        </nav>

         <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <span style="font-weight: 1000; font-family: red serifs; font-size: 30px; "> <span style="font-family: Courier; ">Theme:</span> "Transmodal Applications of Automotive Engines in Logistics and Mass Transportation Operations: Responsibilities Challenges and Opportunities" </span>
            </div>
        </nav>


         <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <img src="images/Megaautoeng1.png" >
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
                        Home
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <!-- <li><a href="#">About us</a></li> -->
                            <li><a href="#">Chairman's comment</a></li>
                            <li><a href="#">Divisional Chairmen comments</a></li>
                           
                            <!-- <li><a href=" {{ route('contact') }} ">Contact us</a></li> -->
                          </ul>
                        </li>
                       <!--  <li class="nav-item">
                          <a class="nav-link" href="#">Photographs</a>
                        </li> -->
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Conference Events<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Schedule of activities</a></li>
                            <li><a href="#">Technical Study Tours</a></li>
                            <li><li><a href="#">Plenary Sessions</a></li></li>
                            
                            <li><a href="#">Networking</a></li>
                            <li><a href="#">Work Group Activites</a></li>
                            <li><a href="#">Rates</a></li>
                            
                          </ul>
                        </li>
                       <!--  <li class="nav-item">
                          <a class="nav-link" href="#">Conference</a>
                        </li> -->
                       

                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('aim') }} ">Aim</a>                            
                        </li>

                        <li class="dropdown">
                          <a href=" {{ route('subThemes') }} " class="dropdown-toggle" data-toggle="dropdown">Objectives<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href=" {{ route('subThemes') }} ">Sub Themes</a></li>
                            
                          </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Participants</a>                            
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href=" {{ route('gallery') }} ">Gallery</a>                            
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('downloads') }} ">Downloads</a>                            
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href=" {{ route('contact') }} ">Contact Us</a>                            
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
                                   {{ Auth::user()->salutations }} {{ Auth::user()->last_name }} <span class="caret"></span>
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

        <div class="panel-footer">
            @include('layouts.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src=" {{ asset('js/animatedText.js') }} "></script>
</body>
</html>

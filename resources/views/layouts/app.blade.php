
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kisan e-Mart</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
      <div id="app">
    
        <div class="container-fluid" style="background-color:#2F3C6A;color:white;padding:20px;">

            <div class="container">
                <div class="row">
                    <div class="col-sm-4">Toll Free Number:9999999999</div>
                       <div class="col-sm-4">Email-ID:info@gmail.com</div>
                </div>
                
         </div>
        </div> 
    
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="padding:10px;">
                <a class="navbar-brand d-flex" href="{{url('/')}}">
                <div><img class="rounded-circle" src="{{asset('images/logo.jpg')}}" alt="logo" style="height:35px" class="pr-2"></div><div class="pl-2" style="color: white;font-weight:bold;">Ksan e-Mart</div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" style="background-color:white"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link" href="">HOME</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('former.aboutus')}}">ABOUT US</a></li>
                        <li class="nav-item"><a  class="nav-link" href="{{route('former.govschemes')}}">GOVERNMENT SCHEMES</a></li>
                        <li class="nav-item"><a  class="nav-link" href="{{route('former.price_detailes')}}">PRICE DETAILES</a></li>

                        <li class="nav-item"><a  class="nav-link" href="{{route('former.benefits')}}">BENEFITS</a></li>
 
                       <li class="nav-item"><a  class="nav-link" href="{{route('former.contactus')}}">CONTACT US</a></li>
 
        


        <!-- <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
BENEFICIARIES</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul> -->
                        


                    </ul  -->
                          <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                          <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRATION') }}</a>
                            </li> 
                                
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>
</div>


<div class="container-fluid" style="background-color:purple;color:white;padding:5px;font-weight:bold">

            <div class="container">
                <div class="row">
                    <div class="col-sm-4" style="font-weight:bold">KISAN E-MART NOTIFICATIONS</div>
                        <div class="col-sm-8"><marquee style="font-weight:bold;color:red">Rice : 100% ( closed) &nbsp; &nbsp;&nbsp;  Wheat:75% ( hurry up)   &nbsp;&nbsp;&nbsp;Maize : 60% </marquee></div>
                </div>

         </div>
        </div> 
        <br><br>







    
            @yield('content')
<br><br><br>
    <!-- Footer -->
   
   
  <!-- Footer Links -->
  <!-- Footer Links -->

  <!-- Copyright -->
<div class="footer-copyright text-center " style="background-color:purple;color:white">© 2020 Copyright:All Rights Reserved !.
  </div> 
  <div class="footer-copyright text-right " style="background-color:purple;color:white">Designed & Developed By Nabirasool
    
  </div>
  <!-- Copyright -->


<!-- Footer -->
    
</body>
</html>

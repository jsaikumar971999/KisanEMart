 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <div class="col-sm-4">Toll Free Number:6281086860</div>
                       <div class="col-sm-4">Email-ID:indiakisanemart@gmail.com</div>
                </div>
                
         </div>
        </div> 
    
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="padding:10px;">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                <div><img class="rounded-circle" src="{{asset('images/logo.jpg')}}" alt="logo" style="height:40px" class="pr-2"></div><div class="pl-2" style="color: white"> </div>
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
 

                          

      <!--   <ul class="navbar-nav mr-auto">
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

                       

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRATION') }}</a>
                            </li> 
                <!--   <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">REGISTRATION FORMS</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{route('former.former_reg')}}">FORMER</a>
              <a class="dropdown-item" href="{{route('trader.trader_reg')}}">TRADER</a>
            </div>
          </li>
        </ul> -->

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
 <div class="container-fluid" style="background-color:;color:green;padding:8px;font-weight:bold">

            <div class="container">
                <div class="row">
     <div class="col-sm-4" style="font-weight:bold">KISAN E-MART NOTIFICATIONS</div><div class="col-sm-8"><marquee style="font-weight:bold;color:red">Rice : 100% ( closed) &nbsp; &nbsp;&nbsp;  Wheat:75% ( hurry up)   &nbsp;&nbsp;&nbsp;Maize : 60% </marquee></div>
                </div>

         </div>
        </div> 


 

 <div class="content">
    <div class="title m-b-md">
                    
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/kisan/slider.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/kisan/slider2.png')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/kisan/slider3.png')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

<!--kisan new taps-->
<br>
<div class="container">
            <div class="card">
                <div class="card-header"style="background-color:green;color:white;">KISAN e-MART NOTIFICATIONS</div>
            </div>

   <div class="card body" style="padding:20px">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="background-color:green;color:white">Kisan e-Mart Notifications</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="background-color:purple;color:white">Crop Notifications</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="background-color:Darkcyan;color:white">Government Notifications</a>
  </li>
</ul>
<br>
<div class="tab-content" id="myTabContent" style="background-color:purple;color: white;padding:40px;border-radius:10px;">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="padding:20px;text-align: justify;">->kisan e mart sells the crop for sure.<br>
->In case of any damage to the crop kisan e mart will help you with benefits.<br>
->Kisan helpline informs the farmer from the day of cultivation to the day they receive the payment from the government about every activity by contacting. <br>
->A committee member from the KEMC verifies the land and crop after registration</marquee></div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="padding:10px;color:white"> 
    <div class="container">
  <table class="table table-bordered" style="color:white;padding:10px;">
    <thead>
      <tr>
        <th>Commodity </th>
        <th>Overall Requirement</th>
        <th>Registered crop </th>
        <th>Percentage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Paddy</td>
        <td>60 lakh ton</td>
        <td>60 lakh ton</td>
        <td>100%</td>
      </tr>
      <tr>
        <td>Wheat </td>
        <td>59 lakh ton</td>
        <td>44.25 lakh ton</td>
        <td>75%</td>
      </tr>
      <tr>
        <td>Maize </td>
        <td>38 lakh ton</td>
        <td>22.8lakh ton</td>
        <td>60%</td>
      </tr>
    </tbody>
  </table>
</div>



  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" style="padding:20px;"> Pm kisan scheme provides RS. 2000 in 3 equal instalments per year.<br>
Bihar Government has planned that the farmers belonging to scheduled castes and tribes as also having 5 acres of land will have free electricity for agricultural endeavour.<br>
The State Government has also announced 80 per cent subsidy on all farm machineries for the farmers belonging to these two groups.</div>
</div>
</div>

</div>



<!-- end new taps-->


<!--about-->

     <div class="container" style="padding:20px;">
        <div class="tittle wow fadeInUp">
                <div class="card">
        <div class="card-header" style="background-color:green;color:white">WHY KISAN e-MART</div>
               <div class="card-body" style="text-align:justify;padding:20px;border-radius: 10px;">
                    <p style="padding:20px;line-height:200%">KISAN e MART is the one and only platform that suggests the farmer to cultivate the particular crop which gives benefits to them.It provides direct contact between farmer and trader without the interference of the middlemen. Here profits are obtained either to the farmer or to the trader.Farmer need not search for trader and trader need not search for farmer.</p>
                </div>
         </div>
         <div class="card-footer" style="background:green"></div>
         </div>
        </div>
    
<!--schemes-->

       <div class="container">
             <div class="card">
                 <div class="card-header" style="background-color:green;color:white"> KISAN e-MART SCHEMES</div>
                <div class="card-body" style="padding:60px;">
                    <div class="row">
                        <div class="col-sm-4">
                           <p style="background-color:#008080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://www.soilhealth.dac.gov.in/">1. Soil Health Card Scheme</a></p>
                            
                        </div>
                        <div class="col-sm-4">
                          <p style="background-color:#808000;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://pmfby.gov.in/">2.Pradhan Mantri Fasal Bima Yojana<br>(PMFBY)</a></p>    
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#800080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://pmksy.gov.in/">3.Pradhan Mantri Krishi Sinchai Yojana (PMKSY)</a></p>    
                        </div>
                        <div class="col-sm-4">
                   <p style="background-color:#000080;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://pgsindia-ncof.gov.in/pkvy/Index.aspx">4.Paramparagat Krishi Vikas Yojana(PKVY)</a></p>    
                        </div>
                        <div class="col-sm-4">
                            <p style="background-color:#008000;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://www.indiafilings.com/learn/micro-irrigation-fund/">5. Micro Irrigation Fund (MIF)</a></p> </div> 
                      <div class="col-sm-4">
                        <p style="background-color:NAVY;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://nmsa.dac.gov.in/">6.National Mission for Sustainable Agriculture (NMSA)</a></p></div>            
                       <div class="col-sm-4">
                            <p style="background-color:PURPLE;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://pradhanmantri-yogana.in/gramin-bhandaran-yojana-in-hindi/">7. Gramin Bhandaran Yojna </a></p></div>            
                       <div class="col-sm-4">
                         <p style="background-color:BLUE;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://pmkisan.gov.in/">8. PM-Kisan Scheme</a></p>  </div>          
                       <div class="col-sm-4">
                        <p style="background-color:TEAL;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://nvshq.org/scheme/bihar-kisan-yojana/">9.Bihar kisan yojana</a></p></div>            
                       <div class="col-sm-4">
                   <p style="background-color:OLIVE;color:white;padding:30px;text-align:center;border-radius:10px;"><a style="color:white;text-decoration:none" href="https://www.indiaagronet.com/Government-Agriculture-Schemes/Subsidy-For-Food-Processing-in-Bihar.html">10.Subsidy for bihar food processing</a></p>  
                     </div>   
                                 
                       </div>
 </div>
 <div class="card-footer" style="background:green"></div>
 </div>
</div>
   

<!--end schems-->


<!-- gallay--->
<div class="container" style="padding:20px;">

     
  <h4 class="font-weight-bold text-center text-lg-center mt-4 mb-2" style="font-weight:bold">Crops Gallery</h4>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">

    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="{{asset('images/crops/rice.png')}}" alt="">
        <p style="font-family:8px;">Rice</p>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
          <img class="img-fluid img-thumbnail" src="{{asset('images/crops/arhar.png')}}" alt="">
         <p style="font-family:8px;">Arhar</p>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <img class="img-fluid img-thumbnail" src="{{asset('images/crops/gram.png')}}" alt="">
          <p style="font-family:8px;">Gram</p>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="{{asset('images/crops/khesaria.png')}}" alt="">
        <p style="font-family:8px;">Khesaria</p>
            
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <img class="img-fluid img-thumbnail" src="{{asset('images/crops/pea.png')}}" alt="">
              <p style="font-family:8px;">Pea</p>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="{{asset('images/crops/maize.png')}}" alt="">
         <p style="font-family:8px;">Maize</p>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
       <img class="img-fluid img-thumbnail" src="{{asset('images/crops/lentils.png')}}" alt="">
        <p style="font-family:8px;">Lentils</p>
           
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <img class="img-fluid img-thumbnail" src="{{asset('images/crops/wheat.png')}}" alt="">
      <p style="font-family:8px;">Wheat</p>
              
    </div>

 
     </div>
       <hr class="mt-2 mb-5">

</div>
<!-- / -->
<div class="container" style="padding:30px;">
  <h3 style="text-align: center;font-weight:bold">Kisan e-Mart Flow Chat </h3><br>
  <img src="{{asset('images/flowchat.jpeg')}}" style="width:100%">


</div>

 <!-- sponser -->
<div class="container" style="background-color:orange;padding:20px;border-radius:10px;">
    <h3 style="text-align:center;color:black;font-weight:bold">OUR SPONSORS</h3>
 <marquee behavior="alternate" direction="right">
<img src="{{asset('images/sponser/sp1.png')}}" class="rounded" style="width:100px;" alt="Spinning arrow" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="{{asset('images/sponser/sp2.png')}}" class="rounded" style="width:100px;" alt="Spinning arrow" / >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="{{asset('images/sponser/sp3.png')}}"  class="rounded" style="width:100px;" alt="Spinning arrow" / >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</marquee>

</div>
<!--end sponser-->
 
<br>
 

<!-- footer-->

  <!-- Copyright -->
<div class="footer-copyright text-center " style="background-color:purple;color:white;padding:15px">© 2020 Copyright:All Rights Reserved !
  </div>
  <div class="footer-copyright text-right " style="background-color:purple;color:white;padding:5px;">Designed & Developed by Nabirasool
    
  </div>
  <!-- Copyright -->


<!-- Footer -->








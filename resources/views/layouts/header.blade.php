<!DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>{{env('APP_NAME')}}</title>
   <!-- Bootstrap core CSS-->
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <link href="{{ URL::asset('main-style.css')}}" rel="stylesheet">
   <link rel="icon" href="img/header/favicon.ico">
   <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{URL::asset('icons/flaticon.css')}}" rel="stylesheet">
   <link href="{{URL::asset('icons-t/flaticon.css')}}" rel="stylesheet">
   <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
   <link href="{{URL::asset('css/bootstrap.offcanvas.min.css')}}" rel="stylesheet">
   <link href="{{URL::asset('css/fontawesome-all.min.css')}}" rel="stylesheet">
   <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet">
   <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
   <link rel="stylesheet" href="{{URL::asset('css/flickity.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/modal-video.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('owlcarousel/assets/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('owlcarousel/assets/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('technology-icon/flaticon.css')}}">
   <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
   
   <script type="text/javascript">
    var ajaxURL="{{URL('/');}}";
    var orderCol=[];
    </script>
    @yield('stylesheet')
   </head> 
   <body>

      <div class="modal fade" id="videomodal" tabindex="-1" role="dialog" aria-labelledby="videomodal" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" id="video"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="preloader">
         <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewbox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
         </svg>
      </div>

      <div id="header" class="homepagetwostyle d-flex mx-auto flex-column">

         <div class="header-animation">
            <div id="particles-bg"></div>
            <div class="video-bg-nuhost-header">
               <div id="video_cover"></div>
               <video autoplay muted loop>
                  <source src="media/coodiv-vid.mp4" type="video/mp4">
               </video>
               <span class="video-bg-nuhost-header-bg"></span>
            </div>
            <span class="moon-bg-her z-index0"></span>
            <span class="courve-gb-hdr-top"></span>
            <a class="support-header-ring" href="#"><img src="img/svgs/support.svg" alt /> <span>support team</span></a>
         </div>

         <div class="header-top-menu">
            <div class="container">
               <ul>
                  <li><a><i class="fas fa-at"></i> support@coodiv.net</a></li>
                  <li><a><i class="fas fa-phone"></i> 00213-123-45-67-89</a></li>
               </ul>
               <div class="ml-auto fl-right phone-no-display">
                  <ul>
                     <li>
                        <a href="#" class="choose-language" data-toggle="popover" id="languageChooser" data-original-title="" title="">
                        <i class="fas fa-globe-americas"></i>
                        English
                        <b class="caret"></b>
                        </a>
                     </li>
                     <li>
                        <a href="/clientarea.php"><i class="fas fa-user"></i> Login</a>
                     </li>
                     <li>
                        <a href="/register.php"><i class="fas fa-user-friends"></i> Register</a>
                     </li>
                     <li class="primary-action">
                        <a href="/cart.php?a=view">
                        <i class="fas fa-shopping-basket"></i>
                        View Cart
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="top-header-nav-home mb-auto">
            <div class="container">
               <nav class="navbar navbar-expand-md navbar-light header-nav-algo-coodiv header-nav-algo-coodiv-v2">
                  <a class="navbar-brand" href="index.html">
                  <img class="black-bg-logo" src="img/header/logo.png" alt />
                  <img class="white-bg-logo" src="img/header/logo-b.png" alt />
                  <span>30-day money back guarantee*</span>
                  </a>
                  <button class="navbar-toggle offcanvas-toggle menu-btn-span-bar ml-auto" data-toggle="offcanvas" data-target="#offcanvas-menu-home">
                  <span></span>
                  <span></span>
                  <span></span>
                  </button>
                  <div class="collapse navbar-collapse navbar-offcanvas" id="offcanvas-menu-home">
                     <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown" href="#" id="indaxdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about-us.html">About us</a>
                        </li>
                        <li class="nav-item mega-dropdown">
                           <a class="nav-link dropdown" href="#" id="megadrop-services" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Services <span class="caret"></span></a>
                           <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="megadrop-services">
                              <div class="our-services-mega-menu-header">
                                 <div class="row justify-content-center our-services-mega-menu-header-items">
                                    <a class="col-md-2" href="domain-search.html">
                                    <i class="flaticon-internet"></i>
                                    <span>Domains</span>
                                    <b>start $0.99</b>
                                    </a>
                                    <a class="col-md-2" href="web-hosting.html">
                                    <i class="flaticon-database-14"></i>
                                    <span>Web Hosting</span>
                                    <b>start $3.99</b>
                                    </a>
                                    <a class="col-md-2" href="reseller-hosting.html">
                                    <i class="flaticon-database-14"></i>
                                    <span>Web Hosting Plus</span>
                                    <b>start $0.39</b>
                                    </a>
                                    <a class="col-md-2" href="WordPress-hosting.html">
                                    <i class="flaticon-database-14"></i>
                                    <span>Web Hosting Pro</span>
                                    <b>start $0.75</b>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact us</a>
                        </li>
                        <li class="nav-item">
                           <a data-toggle="tooltip" data-placement="bottom" title="search" class="search-headr" href="#"><img src="img/svgs/search.svg" alt /></a>
                        </li>
                     </ul>
                  </div>
                  <ul class="account-place-header-nav">
                     <li class="nav-item dropdown">
                        <a data-toggle="dropdown" aria-haspopup="true" id="customarea" aria-expanded="false" class="accouting-h dropdown-toggle" href="#"><img src="img/svgs/avatar.svg" alt /></a>
                        <div class="dropdown-menu login-drop-down-header" aria-labelledby="customarea">
                           <form action="#" data-form="validate">
                              <div class="form-group">
                                 <input type="email" name="username" placeholder="Your Email" class="form-control" required>
                              </div>
                              <div class="form-group">
                                 <input type="password" name="password" placeholder="Password" class="form-control" required>
                              </div>
                              <p class="help-block"><a href="#">Forgot Your Password?</a> <a href="#">Sign up</a></p>
                              <button type="submit" class="btn btn-block btn-default text-uppercase">Login</button>
                           </form>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <main class="inner cover header-heeadline-title mb-auto">
            <div class="owl-carousel owl-theme main-header-slider">
               <div class="item">
                  <h5><span class="blok-on-phon">website hosting<br> Starting at</span> <span id="typed"></span></h5>
                  <p>With Every Shared Hosting Plan you get Unlimited SSD Storage, <br/>Unlimited Bandwidth, Unlimited Email Account(s), Unlimited Databases, Free SSL,<br/> Free Website Builder, Free SEO Tools, Free Malware Scanner, Free Backups, Softaculous Auto Installer. 30-day money back guarantee<br/></p>
                  <a class="header-order-button-slid" href="#">start with us now</a>
               </div>
               <div class="item">
                  <h4 class="second-item-slider-title">we are good at <span>some of thease stuff under</span></h4>
                  <div class="row justify-content-center">
                     <div class="box-slider-serveis">
                        <img src="img/svgs/servers-g.svg" alt />
                        <h6>web hosting services</h6>
                     </div>
                     <div class="box-slider-serveis">
                        <img src="img/svgs/database.svg" alt />
                        <h6>web hosting services</h6>
                     </div>
                     <div class="box-slider-serveis">
                        <img src="img/svgs/globe.svg" alt />
                        <h6>web hosting services</h6>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         <div class="mt-auto"></div>
      </div>
      {{-- menu end --}}
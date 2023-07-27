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
   <link rel="icon" href="img/header/favicon.ico">
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
   <link href="{{URL::asset('templates/bredh-moon/css/all.min4f2b.css')}}" rel="stylesheet">
   <link href="{{URL::asset('templates/bredh-moon/css/main.min.css')}}" rel="stylesheet">
   <link href="{{URL::asset('templates/bredh-moon/css/custom.css')}}" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/fontawesome-all.min.css') }}" />
   <link rel="stylesheet" type="text/css" href="templates/orderforms/nuhost_premium_comparison/css/style.css" property="stylesheet" />
   <link rel="stylesheet" type="text/css" href="templates/orderforms/standard_cart/css/all.min4f2b.css?v=d9d193" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="{{URL::asset('templates/bredh-moon/js/scripts.min4f2b.js')}}" type="text/javascript"></script>


   <script type="text/javascript">
    var ajaxURL="{{URL('/');}}";
    var orderCol=[];
    
    </script>
    @yield('stylesheet')
      <style>
      .position-relative{ position: relative; }
      </style>
   </head> 
   <body>

      <div class="preloader">
         <div class="preloader-container">
            <svg version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
               <circle fill="#675cda" stroke="none" cx="6" cy="50" r="6">
                  <animatetransform attributename="transform" dur="1s" type="translate" values="0 15 ; 0 -15; 0 15" repeatcount="indefinite" begin="0.1" />
               </circle>
               <circle fill="#675cda" stroke="none" cx="30" cy="50" r="6">
                  <animatetransform attributename="transform" dur="1s" type="translate" values="0 10 ; 0 -10; 0 10" repeatcount="indefinite" begin="0.2" />
               </circle>
               <circle fill="#675cda" stroke="none" cx="54" cy="50" r="6">
                  <animatetransform attributename="transform" dur="1s" type="translate" values="0 5 ; 0 -5; 0 5" repeatcount="indefinite" begin="0.3" />
               </circle>
            </svg>
            <span>loading</span>
         </div>
      </div>
      <div id="coodiv-header" class="d-flex mx-auto flex-column {!! Request::is('/') ? '' : 'subpages-header' !!} moon-edition">
         <div class="bg_overlay_header">
            <div id="particles-bg"></div>
            <div class="bg-img-header-new-moon">&nbsp;</div>
         </div>
         <div class="whmcs-top-header-coodiv">
            <div class="container">
               <ul class="top-header-right-nav">
                  <li><i class="bredhicon-chat-inv"></i> <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="6e1d1b1e1e011c1a2e0d01010a071840000b1a">[email&#160;protected]</a></li>
               </ul>
               <ul class="top-nav">
                  <li>
                     <a href="javascript:void(0)" class="choose-language whmcs-top-header-coodiv-link" data-toggle="popover" id="languageChooser">
                     <i class="bredhicon-location-inv"></i>
                     <span>English</span>
                     </a>
                  </li>
                  <li>
                     <a class="whmcs-top-header-coodiv-link" title="Register" href="{{URL('registration')}}">
                     <i class="bredhicon-lock-empty"></i>
                     <span>Register</span>
                     </a>
                  </li>
                  <li>
                     <a class="whmcs-top-header-coodiv-link" href="{{URL('cart')}}">
                     <i class="bredhicon-box"></i>
                     <span>View Cart</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <nav id="coodiv-navbar-header" class="navbar navbar-expand-md fixed-header-layout">
            <div class="container main-header-coodiv-s">
               <a class="navbar-brand" href="{{URL('/')}}">
               <img class="w-logo" src="templates/bredh-moon/img/header/logo-w.png" alt="Company Name" />
               <img class="b-logo" src="templates/bredh-moon/img/header/logo.png" alt="Company Name" />
               </a>
               <button class="navbar-toggle offcanvas-toggle menu-btn-span-bar ml-auto" data-toggle="offcanvas" data-target="#offcanvas-menu-home">
               <span></span>
               <span></span>
               <span></span>
               </button>
               <div class="coodiv-colpass-menu-header navbar-offcanvas" id="offcanvas-menu-home">
                  <ul class="nav navbar-nav ml-auto">
                     <li data-username="Home" class="nav-item">
                        <a href="{{URL('/')}}" class="nav-link active">Home</a>
                     </li>
                     
                     <li data-username="announcements" class="nav-item">
                        <a href="{{URL('domain-search')}}" class="nav-link ">Domains</a>
                     </li>
                     <li data-username="contact" class="nav-item">
                        <a href="{{URL('contact-us')}}" class="nav-link ">Contact Us</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" role="button" id="webhosting-megamenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{URL('web-hosting')}}">Hosting <span class="nav-new-tag">New</span></a>
                        <div class="dropdown-menu coodiv-dropdown-header web-menu" aria-labelledby="webhosting-megamenu">
                           <ul class="web-hosting-menu-header">
                              <li><i class="fas fa-server"></i> <a href="{{URL('web-hosting-starter')}}">Web Hosting <span>Lorem ipsum dolor sit amet</span></a></li>
                              <li><i class="fab fa-squarespace"></i> <a href="{{URL('web-hosting-plus')}}">Web Hosting Plus <span>Lorem ipsum dolor sit amet</span></a></li>
                              <li><i class="fas fa-server"></i> <a href="{{URL('web-hosting-pro')}}">Web Hosting Pro <span>Lorem ipsum dolor sit amet</span></a></li>
                              <li><i class="fab fa-squarespace"></i> <a href="javascript:void(0)">Reseller Hosting <span>Lorem ipsum dolor sit amet</span></a></li>
                              <li><i class="fas fa-cloud"></i> <a href="javascript:void(0)">Cloud VPS <span>Lorem ipsum dolor sit amet</span></a></li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </div>
               <ul class="header-user-info-coodiv">
                  <li class="dropdown">
                     <a role="button" id="header-login-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{URL('login')}}">
                     Login
                     </a> <span>12365-8448</span>
                     <div class="dropdown-menu coodiv-dropdown-header user-login-dropdown " aria-labelledby="header-login-dropdown">
                        <form class="user-login-dropdown-form" method="post" action="{{URL('validate-login')}}">
                           @csrf
                           <div class="form-group username">
                              <input type="email" name="email" id="inputEmail" placeholder="Enter email" class="form-control" autofocus>
                              <i class="fas fa-at"></i>
                              @if($errors->has('email'))
                                 <div class="error" style="color: red">{{ $errors->first('email') }}</div>
                              @endif
                           </div>
                           <div class="form-group password">
                              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" autocomplete="off">
                              <i class="fas fa-lock"></i>
                              @if($errors->has('password'))
                              <div class="error" style="color: red">{{ $errors->first('password') }}</div>
                              @endif
                           </div>
                           <button data-toggle="tooltip" data-placement="left" title="Login" class="user-login-dropdown-form-button" type="submit"><i class="fas fa-angle-right"></i></button>
                        </form>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
         <div class="header-height-clone"></div>
         
         @yield('head-other-content')

         <div class="mt-auto"></div>
      </div>
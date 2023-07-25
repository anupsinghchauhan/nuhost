@extends('layouts.auth')

@section('content')
<body data-phone-cc-input="1" class="fullpage">
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

<div class="custom-login-page">
<div class="login-left-side-custom">
<div id="particles-bg"></div>
<img class="custom-login-bg" src="templates/bredh-moon/img/header/h_bg_02.svg" alt="img-bg">
<div>
<a class="navbar-brand" href="index.html"><img class="w-logo" src="templates/bredh-moon/img/header/logo-w.png" alt="Company Name" /></a>
<span class="login-email-header"><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="becdcbceced1cccafeddd1d1dad7c890d0dbca">[email&#160;protected]</a></span>
</div>
<div class="kt-grid">
<div class="item-middle">
<h3 class="login-title">Welcome to our Support Portal.</h3>
<span class="login-subtitle">You must login to access this page. These login details differ from your websites control panel username and password.</span>
</div>
<div class="item-footer">
<div class="login-info">
<div class="login-copyright">© 2023, {{env('APP_NAME')}}</div>
<div class="login-menu">
<a href="{{URL('our-service')}}" class="kt-link">Our Service</a>
<a href="{{URL('contact-us')}}" class="kt-link">Contact</a>
</div>
</div>
</div>
</div>
</div>
<div class="login-right-side-custom">
<div class="login-head"><span>Create an account with us . . . </span> <a href="index804a.html">Sign Up</a></div>
<div class="login-wrapper">
	<div class="login-form-container">
<h5 class="login-title">LOGIN</h5>
<div class="providerLinkingFeedback"></div>

@if ($errors->any())
@foreach ($errors->all() as $error)
	<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif

<form method="post" action="{{URL('validate-login')}}" class="login-form" role="form">
@csrf
<div class="form-group">
<input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email" autofocus="">
</div>
<div class="form-group">
<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" autocomplete="off">
</div>
<div class="checkbox">
<label>
<input type="checkbox" name="rememberme"> Remember Me
</label>
</div>
<div class="text-center margin-bottom">
</div>
<div align="center">
<input id="login" type="submit" class="btn btn-primary" value="Login"> 
{{-- <a href="index0839.html?rp=/password/reset" class="btn btn-default">Forgot Password?</a> --}}
</div>
</form>

</div>
</div>
</div>
</div>

@endsection
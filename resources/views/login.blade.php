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
<h3 class="login-title">Ласкаво просимо до панелі керування.</h3>
<span class="login-subtitle">Ви повинні авторизуватися для доступу до даної сторінки.</span>
</div>
<div class="item-footer">
<div class="login-info">
<div class="login-copyright">© 2023, Company Name</div>
<div class="login-menu">
<a href="indexded0.html" class="kt-link">Knowledgebase</a>
<a href="contact.html" class="kt-link">Contact</a>
</div>
</div>
</div>
</div>
</div>
<div class="login-right-side-custom">
<div class="login-head"><span>Вже зареєстровані?</span> <a href="index804a.html">Вхід</a></div>
<div class="login-wrapper">
	<div class="login-form-container">
<h5 class="login-title">Вхід</h5>
<div class="providerLinkingFeedback"></div>
<form method="post" action="https://demo.coodiv.net/dologin.php" class="login-form" role="form">
<input type="hidden" name="token" value="9556054f3b5a6e310d92c298e5d894f1927ecd20">
<div class="form-group">
<input type="email" name="username" class="form-control" id="inputEmail" placeholder="Введіть email" autofocus="">
</div>
<div class="form-group">
<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Пароль" autocomplete="off">
</div>
<div class="checkbox">
<label>
<input type="checkbox" name="rememberme"> Запам'ятати мене
</label>
</div>
<div class="text-center margin-bottom">
</div>
<div align="center">
<input id="login" type="submit" class="btn btn-primary" value="Увійти"> <a href="index0839.html?rp=/password/reset" class="btn btn-default">Забули пароль?</a>
</div>
</form>
<div class="hidden">
<div class="divider">
<span></span>
<span>Or</span>
<span></span>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="fullpage-overlay" class="hidden">
<div class="outer-wrapper">
<div class="inner-wrapper">
<img src="assets/img/overlay-spinner.svg">
<br>
<span class="msg"></span>
</div>
</div>
</div>
<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content panel-primary">
<div class="modal-header panel-heading">
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span>
<span class="sr-only">Close</span>
</button>
<h4 class="modal-title"></h4>
</div>
<div class="modal-body panel-body">
Завантаження...
</div>
<div class="modal-footer panel-footer">
<div class="pull-left loader">
<i class="fas fa-circle-notch fa-spin"></i>
Завантаження...
</div>
<button type="button" class="btn btn-default" data-dismiss="modal">
Close
</button>
<button type="button" class="btn btn-primary modal-submit">
Submit
</button>
</div>
</div>
</div>
</div>
<form action="#" id="frmGeneratePassword" class="form-horizontal">
<div class="modal fade" id="modalGeneratePassword">
<div class="modal-dialog">
<div class="modal-content panel-primary">
<div class="modal-header panel-heading">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">
Generate Password
</h4>
</div>
<div class="modal-body">
<div class="alert alert-danger hidden" id="generatePwLengthError">
Please enter a number between 8 and 64 for the password length
</div>
<div class="form-group">
<label for="generatePwLength" class="col-sm-4 control-label">Password Length</label>
<div class="col-sm-8">
<input type="number" min="8" max="64" value="12" step="1" class="form-control input-inline input-inline-100" id="inputGeneratePasswordLength">
</div>
</div>
<div class="form-group">
<label for="generatePwOutput" class="col-sm-4 control-label">Generated Password</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputGeneratePasswordOutput">
</div>
</div>
<div class="row">
<div class="col-sm-8 col-sm-offset-4">
<button type="submit" class="btn btn-default btn-sm">
<i class="fas fa-plus fa-fw"></i>
Generate new password
</button>
<button type="button" class="btn btn-default btn-sm copy-to-clipboard" data-clipboard-target="#inputGeneratePasswordOutput">
<img src="assets/img/clippy.svg" alt="Copy to clipboard" width="15">
Copy
</button>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
Close
</button>
<button type="button" class="btn btn-primary" id="btnGeneratePasswordInsert" data-clipboard-target="#inputGeneratePasswordOutput">
Copy to clipboard and Insert
</button>
</div>
</div>
</div>
</div>
</form>
@endsection
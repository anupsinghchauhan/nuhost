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
	@yield('content')
   	<script src="{{URL::asset('templates/bredh-moon/js/template-scripts.js')}}" type="text/javascript"></script>
   	<script src="{{URL::asset('templates/bredh-moon/js/flickity.pkgd.min.js')}}" type="text/javascript"></script>
   	<script src="{{URL::asset('templates/bredh-moon/owlcarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
   	<script src="{{URL::asset('templates/bredh-moon/js/parallax.min.js')}}" type="text/javascript"></script>
   	<script src="{{URL::asset('templates/bredh-moon/js/bootstrap.offcanvas.min.js')}}" type="text/javascript"></script>
   <script src="{{URL::asset('templates/bredh-moon/js/jquery.touchSwipe.min.js')}}" type="text/javascript"></script>
   <script src="{{URL::asset('templates/bredh-moon/js/particles-code.js')}}" type="text/javascript"></script>
   <script src="{{URL::asset('templates/bredh-moon/js/particles.js')}}" type="text/javascript"></script>
   <script src="{{URL::asset('templates/bredh-moon/js/smoothscroll.js')}}" type="text/javascript"></script>
   @yield('javascript')
   </body>
</html>
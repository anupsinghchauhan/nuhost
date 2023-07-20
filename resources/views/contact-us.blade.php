@extends('layouts.default')
@section('head-other-content')
<main class="container mb-auto mt-auto main-header-sub-pages-informations">
   <div class="header-lined">
      <h1>Contact Us <small>We're ready and waiting for your questions</small></h1>
      <ol class="breadcrumb">
         <li>
            <a href="index.html"> Portal Home
            </a> 
         </li>
         <li class="active">
            Pre-Sales Contact Us
         </li>
      </ol>
   </div>
</main>
@endsection
@section('content')
<section id="main-body">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 main-content">
            <div class="header-lined">
               <h1>Contact Us <small>We're ready and waiting for your questions</small></h1>
               <ol class="breadcrumb">
                  <li>
                     <a href="index.html"> Portal Home
                     </a> 
                  </li>
                  <li class="active">
                     Pre-Sales Contact Us
                  </li>
               </ol>
            </div>
            <form method="post" action="https://demo.coodiv.net/contact.php" class="form-horizontal" role="form">
               <input type="hidden" name="token" value="9556054f3b5a6e310d92c298e5d894f1927ecd20" />
               <input type="hidden" name="action" value="send" />
               <div class="form-group">
                  <label for="inputName" class="col-sm-3 control-label">Name</label>
                  <div class="col-sm-7">
                     <input type="text" name="name" value class="form-control" id="inputName" />
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputEmail" class="col-sm-3 control-label">Email Address</label>
                  <div class="col-sm-7">
                     <input type="email" name="email" value class="form-control" id="inputEmail" />
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputSubject" class="col-sm-3 control-label">Subject</label>
                  <div class="col-sm-7">
                     <input type="subject" name="subject" value class="form-control" id="inputSubject" />
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputMessage" class="col-sm-3 control-label">Message</label>
                  <div class="col-sm-9">
                     <textarea name="message" rows="7" class="form-control" id="inputMessage"></textarea>
                  </div>
               </div>
            
               <div class="form-group">
                  <div class="text-center">
                     <button type="submit" class="btn btn-primary">Send Message</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</section>
@endsection
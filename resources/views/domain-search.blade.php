@extends('layouts.default')
@section('head-other-content')
<main class="container mb-auto mt-auto main-header-sub-pages-informations">
   <div class="header-lined">
   <h1>wordpress hosting</h1>
      <ol class="breadcrumb">
         <li>
            <a href="index.html"> Головна</a>
         </li>
         <li class="active"> wordpress servers </li>
      </ol>
   </div>
</main>
@endsection

@section('content')

<section id="main-body">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 main-content">
                  <link rel="stylesheet" type="text/css" href="templates/orderforms/standard_cart/css/all.min4f2b.css?v=d9d193" />
                  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="aa6f67030a102bd73adcc30e-text/javascript" src="templates/orderforms/standard_cart/js/scripts.min4f2b.js?v=d9d193"></script>
                  <div id="order-standard_cart">
                     <div class="row">

                        <div class="cart-sidebar">
                           @include('include.cart-sidebar')
                        </div>

                        <div class="cart-body">
                           <div class="header-lined">
                              <h1 class="font-size-36">
                                 Register Domain
                              </h1>
                           </div>
                           <div class="sidebar-collapsed">
                              <div class="pull-left form-inline float-left">
                                 <form>
                                    <select name="gid" id="gidForm" onchange="if (!window.__cfRLUnblockHandlers) return false; javascript:redirectToCartPage()" class="form-control" data-cf-modified-aa6f67030a102bd73adcc30e->
                                       <optgroup label="Product Categories">
                                          <option value="index1321.html?rp=/store/bredh-premium-comparison">bredh premium comparison</option>
                                          <option value="indexb4ae.html?rp=/store/bredh-and-nuhost-premium-comparison">bredh &amp; nuhost premium comparison</option>
                                          <option value="index9e39.html?rp=/store/shared-hosting">shared Hosting</option>
                                       </optgroup>
                                       <optgroup label="Actions">
                                          <option value="/cart.php?gid=registerdomain" selected>Register a New Domain</option>
                                          <option value="cart7c76.html?gid=transferdomain">Transfer in a Domain</option>
                                          <option value="cart14c8.html?a=view">View Cart</option>
                                       </optgroup>
                                    </select>
                                 </form>
                              </div>
                           </div>
                          
                           <p>Find your new domain name. Enter your name or keywords below to check availability.</p>
                           <div class="domain-checker-container">
                              <div class="domain-checker-bg clearfix">
                                 <form method="post" action="https://demo.coodiv.net/cart.php" id="frmDomainChecker">
                                    <input type="hidden" name="token" value="9556054f3b5a6e310d92c298e5d894f1927ecd20" />
                                    <input type="hidden" name="a" value="checkDomain">
                                    <div class="row">
                                       <div class="col-md-8 col-md-offset-2 offset-md-2 col-xs-10 col-xs-offset-1 col-10 offset-1">
                                          <div class="input-group input-group-lg input-group-box">
                                             <input type="text" name="domain" class="form-control" placeholder="Find your new domain name" value id="inputDomain" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="Enter a domain or keyword" />
                                             <span class="input-group-btn input-group-append">
                                             <button type="submit" id="btnCheckAvailability" class="btn btn-primary domain-check-availability">Search</button>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                         
                           {{-- <div class="domain-pricing">
                              <h4 class="font-size-18">Browse extensions by category</h4>
                              <div class="tld-filters"></div>
                              <div class="bg-white">
                                 <div class="row no-gutters tld-pricing-header text-center">
                                    <div class="col-md-4">Domain</div>
                                    <div class="col-md-8">
                                       <div class="row no-gutters">
                                          <div class="col-xs-4 col-4">New Price</div>
                                          <div class="col-xs-4 col-4">Transfer</div>
                                          <div class="col-xs-4 col-4">Renewal</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row tld-row no-tlds">
                                    <div class="col-xs-12 col-12 text-center">
                                       <br>
                                       Please choose a category from above.
                                       <br><br>
                                    </div>
                                 </div>
                              </div>
                           </div> --}}
                           {{-- <div class="row">
                              <div class="col-md-6">
                                 <div class="domain-promo-box">
                                    <div class="clearfix">
                                       <i class="fas fa-server fa-4x"></i>
                                       <h3 class="font-size-24 no-wrap">Add Web Hosting</h3>
                                       <p class="font-bold text-warning">Choose from a range of web hosting packages</p>
                                    </div>
                                    <p>We have packages designed to fit every budget</p>
                                    <a href="index1321.html" class="btn btn-warning">
                                    Explore packages now
                                    </a>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="domain-promo-box">
                                    <div class="clearfix">
                                       <i class="fas fa-globe fa-4x"></i>
                                       <h3 class="font-size-22">Transfer your domain to us</h3>
                                       <p class="font-bold text-primary">Transfer now to extend your domain by 1 year!*</p>
                                    </div>
                                    <a href="cart7c76.html?a=add&amp;domain=transfer" class="btn btn-primary">
                                    Transfer a domain
                                    </a>
                                    <p class="small">* Excludes certain TLDs and recently renewed domains</p>
                                 </div>
                              </div>
                           </div> --}}
                        </div>
                     </div>
                  </div>
                 
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </section>
@endsection
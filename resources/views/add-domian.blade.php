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
                                 Choose a Domain...
                              </h1>
                           </div>
                           <form method="post" action="{{URL('add-domain-process')}}">
                              @csrf
                              <input type="hidden" name="_qty" value="{{$cart['cart']['_qty']}}">
                              <input type="hidden" name="_price" value="{{$cart['cart']['_price']}}">
                              <input type="hidden" name="_hosting_name" value="{{$cart['cart']['_hosting_name']}}">
                              <input type="hidden" name="_hosting_duration" value="{{$cart['cart']['_hosting_duration']}}">
                              <div class="domain-selection-options">
                                 <div class="option">
                                    <label class="">
                                       <div class="iradio_square-blue" id="iCheck-selregister"></div>
                                       Register a new domain
                                    </label>
                                 </div>
                                 <div class="option">
                                    <label class="">
                                       <div class="iradio_square-blue" id="iCheck-seltransfer" style="position: relative;">
                                       </div>
                                       Transfer your domain from another registrar
                                    </label>
                                 </div>
                                 <div class="option">
                                    <label class="">
                                       <div class="iradio_square-blue checked" id="iCheck-selowndomain" style="position: relative;">
                                       </div>
                                       I will use my existing domain and update my nameservers
                                    </label>
                                    <div class="domain-input-group clearfix" id="domainowndomain" style="display:block">
                                       <div class="row">
                                          <div class="col-sm-9">
                                             <div class="row domains-row">
                                                <div class="col-xs-2 col-2 text-right">
                                                   <p class="form-control-static">
                                                      www.
                                                   </p>
                                                </div>
                                                <div class="col-xs-7 col-7">
                                                   <input type="text" id="owndomainsld" value="" placeholder="example" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="" data-original-title="Please enter your domain" name="_host">
                                                </div>
                                                <div class="col-xs-3 col-3">
                                                   <input type="text" name="_host_type" id="owndomaintld" value="" placeholder="com" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="" data-original-title="Required" >
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-2">
                                             <button type="submit" class="btn btn-primary btn-block" id="useOwnDomain">
                                             Use
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                         
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
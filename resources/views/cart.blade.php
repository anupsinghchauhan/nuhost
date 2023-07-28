@extends('layouts.default')
@section('head-other-content')
<main class="container mb-auto mt-auto main-header-sub-pages-informations">
   <div class="header-lined">
   <h1>Cart</h1>
      <ol class="breadcrumb">
         <li>
            <a href="index.html"> Home</a>
         </li>
         <li class="active"> Cart </li>
      </ol>
   </div>
</main>
@endsection

@section('content')
<script type="text/javascript" src="assets/js/StatesDropdown.js"></script>
<section id="main-body">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 main-content">
            
            <div id="order-standard_cart">
               <div class="row">

                  
                     <div class="cart-sidebar">
                        @include('include.cart-sidebar')
                     </div>

                     <div class="cart-body">
                        <div class="header-lined">
                           <h1 class="font-size-36">
                              Review & Checkout
                           </h1>
                        </div>

                         <div class="row">

                        <div class="col-sm-8">

                           <form method="post" action="https://demo.coodiv.net/cart.php?a=view">
                              <input type="hidden" name="token" value="9556054f3b5a6e310d92c298e5d894f1927ecd20" />
                              <div class="view-cart-items-header">
                                 <div class="row">
                                    <div class="col-sm-7 col-xs-7 col-7">
                                       Product/Options
                                    </div>
                                    <div class="col-sm-4 col-xs-5 col-5 text-right">
                                       Price/Cycle
                                    </div>
                                 </div>
                              </div>
                              <div class="view-cart-items">
                                 @if(count($cart) == 0)
                                 <div class="view-cart-empty">
                                    Your Shopping Cart is Empty
                                 </div>
                                 @else
                                 <div class="item">
                                    <div class="row">
                                       <div class="col-sm-7">
                                          <span class="item-title">
                                             {{ Str::ucfirst( strtolower($cart['cart']['_hosting_name']))  }} Plan
                                             <a href="{{URL('web-hosting-starter')}}" class="btn btn-link btn-xs">
                                              <i class="fas fa-pencil-alt"></i>
                                             Edit
                                             </a>
                                          </span>
                                          <span class="item-group">
                                             Shared Hosting
                                          </span>
                                          <span class="item-domain">
                                             {{$cart['cart']['_url']}}
                                          </span>
                                       </div>
                                       <div class="col-sm-4 item-price">
                                          <span>
                                             {{$arrPrices['currency_symbol'] . $cart['cart']['_price'] .' '. $arrPrices['currency']}}
                                          </span>
                                          <select name="hosting_duration" onchange ="applyHostingDuration(this.value);">
                                             <option value="12" @if($cart['cart']['_hosting_duration'] == 12) selected @endif>12 - Month</option>
                                             <option value="24" @if($cart['cart']['_hosting_duration'] == 24) selected @endif>24 - Month</option>
                                             <option value="36" @if($cart['cart']['_hosting_duration'] == 36) selected @endif>36 - Month</option>
                                          </select>
                                          <span class="cycle">One Time</span>
                                          {{ $arrPrices['currency_symbol'] .' '. $arrPrices['setup_fee']}} Setup Fee
                                       </div>
                                    </div>
                                 </div>   
                                 @endif
                              </div>
                           </form>

                           <div class="view-cart-tabs">

                              <ul class="nav nav-tabs" role="tablist">
                                 <li role="presentation" class="nav-item active">
                                    <a href="javascript:void(0)" class="nav-link active" aria-controls="applyPromo" role="tab" data-toggle="tab">
                                    Apply Promo Code
                                    </a>
                                 </li>
                              </ul>

                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane active promo" id="applyPromo">
                                    
                                       <div class="form-group prepend-icon ">
                                          <label for="cardno" class="field-icon">
                                          <i class="fas fa-ticket-alt"></i>
                                          </label>
                                          <input type="text" value="OFFER-ALL" class="field form-control" placeholder="Enter promo code if you have one" readonly>
                                       </div>
                                       <button type="submit" name="validatepromo" class="btn btn-block btn-default" value="Validate Code" disabled>
                                       Validate Code
                                       </button>
                                    
                                 </div>
                                 
                              </div>

                           </div>

                        </div>

                        <div class="col-sm-4">
                           <div class="order-summary" id="orderSummary">
                              <div class="loader w-hidden" id="orderSummaryLoader">
                                 <i class="fas fa-fw fa-sync fa-spin"></i>
                              </div>
                              <h2 class="font-size-30">Order Summary</h2>
                              <div class="summary-container">
                                 <div class="subtotal clearfix">
                                    <span class="pull-left float-left">Subtotal</span>
                                    <span id="subtotal" class="pull-right float-right">{{$arrPrices['currency_symbol'] . $cart['cart']['_net_amount'] .' '. $arrPrices['currency']}}</span>
                                 </div>
                                 <div class="recurring-totals clearfix">
                                    <span class="pull-left float-left">Totals</span>
                                    <span id="recurring" class="pull-right float-right recurring-charges">
                                    <span id="recurringMonthly" style="display:none;">
                                    <span class="cost"></span> Monthly<br/>
                                    </span>
                                    <span id="recurringQuarterly" style="display:none;">
                                    <span class="cost"></span> Quarterly<br/>
                                    </span>
                                    <span id="recurringSemiAnnually" style="display:none;">
                                    <span class="cost"></span> Semi-Annually<br/>
                                    </span>
                                    <span id="recurringAnnually" @if($cart['cart']['_hosting_duration'] == 12) style="display:block;" @else style="display:none;" @endif >
                                    <span class="cost"></span> Annually<br/>
                                    </span>
                                    <span id="recurringBiennially" @if($cart['cart']['_hosting_duration'] == 24) style="display:block;" @else style="display:none;" @endif >
                                    <span class="cost"></span> Biennially<br/>
                                    </span>
                                    <span id="recurringTriennially" @if($cart['cart']['_hosting_duration'] == 36) style="display:block;" @else style="display:none;" @endif >
                                    <span class="cost"></span> Triennially<br/>
                                    </span>
                                    </span>
                                 </div>
                                 <div class="total-due-today total-due-today-padded">
                                    <span id="totalDueToday" class="amt">{{$arrPrices['currency_symbol'] . $cart['cart']['_total'] .' '. $arrPrices['currency']}}</span>
                                    <span>Total Due Today</span>
                                 </div>
                                 <div class="express-checkout-buttons"></div>
                                 <div class="text-right">
                                    <a href="cart0973-2.html?a=checkout&amp;e=false" class="btn btn-success btn-lg btn-checkout disabled" id="checkout">
                                    Checkout
                                    <i class="fas fa-arrow-right"></i>
                                    </a><br/>
                                    <a href="index1321.html" class="btn btn-link btn-continue-shopping" id="continueShopping">
                                    Continue Shopping
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                       
                     </div>

                    

                  
               </div>
            </div>
           
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</section>
@endsection
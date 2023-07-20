@extends('layouts.default')

@section('head-other-content')
<main class="container mb-auto mt-auto">
   <div class="carousel carousel-main">
      <div class="carousel-cell">
         <h3 class="mt-3 main-header-text-title"><span>Begin the search for your perfect domain name...</span>Register Domain</h3>
         <div style="margin: 0;" class="row">
            <form method="post" action="https://demo.coodiv.net/domainchecker.php" id="domain-search-header" class="col-md-push-2 col-md-8">
               <input type="hidden" name="token" value="9556054f3b5a6e310d92c298e5d894f1927ecd20" />
               <input type="hidden" name="transfer" />
               <i class="fas fa-globe"></i>
               <input type="text" placeholder="Find your new domain name" id="btnTransfer" placeholder="eg. example.com" autocapitalize="none" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="Required">
               <span class="inline-button-domain-order">
               <button data-toggle="tooltip" data-placement="left" title="Transfer" id="transfer-btn" type="submit" name="transfer" value="Transfer"><i class="fas fa-undo"></i></button>
               <button data-toggle="tooltip" data-placement="left" title="Search" id="search-btn" type="submit" value="Search"><i class="fas fa-search"></i></button>
               </span>
            </form>
         </div>
         <span class="col-md-push-2 col-md-8 domain-search-header-pricetext">Starting at <b>$0.99/Year</b></span>
      </div>
   </div>
</main>
@endsection

@section('content')
<section class="white-bg">
   <div class="container">
      <div class="row justify-content-start futures-version-2">
         <div class="col-md-3">
            <div class="futures-version-2-box">
               <i class="bredhicon-share"></i>
               <h5>Buy A Domain</h5>
               <p>Below you can configure the domain names in your shopping cart selecting the addon services you would like, providing required information for them and defining the nameservers that they will use.</p>
               <div class="text-right">
                  <a class="more-btn" href="cart2029.html">Register</a>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="futures-version-2-box">
               <i class="bredhicon-download-cloud"></i>
               <h5>Order Hosting</h5>
               <p>By trusting us with your business needs, we promise you a 99.9% uptime on any services we provide, outside of any standard maintenance we may provide.</p>
               <div class="text-right">
                  <a class="more-btn" href="index1321.html">Order</a>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="futures-version-2-box">
               <i class="bredhicon-flash"></i>
               <h5>Make Payment</h5>
               <p>Below is a summary of the selected invoices and the total due to pay all of them. To submit payment please just choose your desired payment method below and then submit.</p>
               <div class="text-right">
                  <a class="more-btn" href="index804a.html">Pay Now</a>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="futures-version-2-box">
               <span class="free-badge"><b></b>Free</span>
               <i class="bredhicon-mic"></i>
               <h5>Get Support</h5>
               <p>Our dedication to customer support reaches across the globe as well. We are here to help you with your hosting in any way possible, and you can reach us via phone, email, or live chat.</p>
               <div class="text-right">
                  <a class="more-btn" href="submitticket.html">Support Tickets</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="padding-100-0 position-relative white-bg">
   <div class="container">
      <h5 class="title-default-coodiv-two">check out awesome plans, and order now <span class="mr-tp-20">chose which package is best for you.</span></h5>
      <div class="row justify-content-center">
         <div class="col-md-5 col-md-push-4">
            <div id="monthly-yearly-chenge" class="mr-tp-40 style-two">
               <a class="active monthly-price"> <span class="change-box-text">billed monthly</span> <span class="change-box"></span></a>
               <a class="yearli-price"> <span class="change-box-text">billed annually</span></a>
            </div>
         </div>
      </div>
      <div class="row justify-content-start second-pricing-table-container mr-tp-30">
         <div class="col-md-4">
            <div class="second-pricing-table">
               <h5 class="second-pricing-table-title">Basic plan <span>mostly for personal using</span></h5>
               <span class="second-pricing-table-price monthly">
               <i class="monthly">$299.99<small>/mo</small></i>
               <i class="yearly">$799.99<small>/year</small></i>
               </span>
               <ul class="second-pricing-table-body">
                  <li>2 TB of space</li>
                  <li>unlimited bandwidth</li>
                  <li>full backup systems</li>
                  <li>free domain</li>
                  <li class="not-chacked">unlimited database</li>
               </ul>
               <a class="second-pricing-table-button" href="#">next setup</a>
            </div>
         </div>
         <div class="col-md-4">
            <div class="second-pricing-table">
               <h5 class="second-pricing-table-title">Expert plan <span>mostly for personal using</span></h5>
               <span class="second-pricing-table-price monthly">
               <i class="monthly">$399.99<small>/mo</small></i>
               <i class="yearly">$899.99<small>/year</small></i>
               </span>
               <ul class="second-pricing-table-body">
                  <li>2 TB of space</li>
                  <li>unlimited bandwidth</li>
                  <li>full backup systems</li>
                  <li>free domain</li>
                  <li class="not-chacked">unlimited database</li>
               </ul>
               <a class="second-pricing-table-button" href="#">next setup</a>
            </div>
         </div>
         <div class="col-md-4">
            <div class="second-pricing-table style-2 active">
               <h5 class="second-pricing-table-title">Relluxe plan <span>mostly for personal using</span></h5>
               <span class="second-pricing-table-price monthly">
               <i class="monthly">$499.99<small>/mo</small></i>
               <i class="yearly">$999.99<small>/year</small></i>
               </span>
               <ul class="second-pricing-table-body">
                  <li>2 TB of space</li>
                  <li>unlimited bandwidth</li>
                  <li>full backup systems</li>
                  <li>free domain</li>
                  <li>unlimited database</li>
               </ul>
               <a class="second-pricing-table-button" href="#">next setup</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="our-pertners white-bg">
   <div class="container">
      <h2 class="d-none">our pertners</h2>
      <div class="owl-carousel pertners-carousel owl-theme">
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo1.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo2.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo3.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo4.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo5.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo1.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo2.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo3.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo4.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="templates/bredh-moon/img/pertners/logo5.png" alt /> </a>
         </div>
      </div>
   </div>
</section>
<section class="section-wth-amwaj">
   <div class="bg_overlay_section-amwaj">
      <img src="templates/bredh-moon/img/bg/b_bg_02.jpg" alt="img-bg">
   </div>
   <div class="container">
      <div class="row justify-content-between mr-tp-50">
         <div class="col-md-6 side-text-right-container">
            <h2 class="side-text-right-title">We are with you ,<br> every step of the way</h2>
            <p class="side-text-right-text">
               Whether you are looking for a <b>personal</b> website hosting plan or a <b>business</b> website hosting plan, We are the perfect solution for you. Our powerful website hosting services will not only help you achieve your overall website goals, but will also provide you with the confidence you need in knowing that you are partnered with a <a href="#">reliable</a> and <a href="#">secure</a> website hosting platform.
               <br>
               <br> We are one of the easiest website hosting platforms to use, and remain committed to providing our customers with one of the best hosting solutions on the market.
            <p>
               <a class="side-text-right-button" href="#">start with us now</a>
         </div>
         <div class="col-md-push-1 col-md-5">
            <div class="display-on-hover-box-container">
               <a href="#tab1" class="display-on-hover-box-items">
               <img src="templates/bredh-moon/img/svgs/hover-box/quality-badge.svg" alt />
               </a>
               <a href="#tab2" class="display-on-hover-box-items">
               <img src="templates/bredh-moon/img/svgs/hover-box/inclined-rocket.svg" alt />
               </a>
               <a href="#tab3" class="display-on-hover-box-items">
               <img src="templates/bredh-moon/img/svgs/hover-box/public-speech.svg" alt />
               </a>
               <a href="#tab4" class="display-on-hover-box-items">
               <img src="templates/bredh-moon/img/svgs/hover-box/big-light.svg" alt />
               </a>
               <a href="#tab5" class="display-on-hover-box-items">
               <img src="templates/bredh-moon/img/svgs/hover-box/big-lifesaver.svg" alt />
               </a>
               <a href="#tab6" class="display-on-hover-box-items">
               <img src="templates/bredh-moon/img/svgs/hover-box/headphones-with-thin-mic.svg" alt />
               </a>
               <a href="#tab7" class="display-on-hover-box-items">
               <img src="templates/bredh-moon/img/svgs/hover-box/inclined-paper-plane.svg" alt />
               </a>
               <a href="#tab8" class="display-on-hover-box-items">
               <img src="templates/bredh-moon/img/svgs/hover-box/big-telephone.svg" alt />
               </a>
               <div class="display-on-hover-box-content">
                  <div class="display-on-hover-box-cotent-items">
                     <div id="tab1" class="tab-content-hover">
                        <h5>Shared Housing</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit. Lorem ipsum dolor sit amet</p>
                     </div>
                     <div id="tab2" class="tab-content-hover">
                        <h5>Dedicated Housing</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit. Lorem ipsum dolor sit amet</p>
                     </div>
                     <div id="tab3" class="tab-content-hover">
                        <h5>Cloud Hosting</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit. Lorem ipsum dolor sit amet</p>
                     </div>
                     <div id="tab4" class="tab-content-hover">
                        <h5>Domains</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit. Lorem ipsum dolor sit amet</p>
                     </div>
                     <div id="tab5" class="tab-content-hover">
                        <h5>VPS Servers</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit. Lorem ipsum dolor sit amet</p>
                     </div>
                     <div id="tab6" class="tab-content-hover">
                        <h5>Cloud VPS</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit. Lorem ipsum dolor sit amet</p>
                     </div>
                     <div id="tab7" class="tab-content-hover">
                        <h5>Reseller Services</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit. Lorem ipsum dolor sit amet</p>
                     </div>
                     <div id="tab8" class="tab-content-hover">
                        <h5>WordPress Hosting</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit. Lorem ipsum dolor sit amet</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="padding-100-0-50 position-relative white-bg">
   <div class="container">
      <div class="banner-servers-box">
         <div class="counter-placeholder"></div>
         <div class="banner-text-left">
            <h5>our server is<strong>24% faster</strong></h5>
            <p>with under 60 seconds worldwide Deploy!</p>
         </div>
         <a class="benchmarks-link" href="#">benchmarks</a>
      </div>
      <div class="row justify-content-left server-tabls-head">
         <div class="col-md-2">storage</div>
         <div class="col-md-2">cpu</div>
         <div class="col-md-2">memory</div>
         <div class="col-md-2">bandwidth</div>
         <div class="col-md-4">price</div>
      </div>
      <div class="server-tabls-body">
         <div class="row justify-content-left server-tabls-row">
            <div class="col-md-2"><span class="server-spects-for-mobile">space</span> <b>120 GB </b>SSD</div>
            <div class="col-md-2"><span class="server-spects-for-mobile">cpu</span> <b>16 CPU</b></div>
            <div class="col-md-2"><span class="server-spects-for-mobile">ram</span> <b>512 MB</b></div>
            <div class="col-md-2"><span class="server-spects-for-mobile">bandwidth</span> <b>0.50 TB</b><span class="span-info-servers">IPv6</span></div>
            <div class="col-md-2"><span class="server-spects-for-mobile">price</span> <b>$12</b>/mo</div>
            <div class="col-md-2"><a class="server-order-button" href="#">order now</a></div>
         </div>
         <div class="row justify-content-left server-tabls-row best-one">
            <div class="col-md-2"><span class="server-spects-for-mobile">space</span> <b>180 GB </b>SSD</div>
            <div class="col-md-2"><span class="server-spects-for-mobile">cpu</span> <b>32 CPU</b></div>
            <div class="col-md-2"><span class="server-spects-for-mobile">ram</span> <b>6 GB</b></div>
            <div class="col-md-2"><span class="server-spects-for-mobile">bandwidth</span> <b>3 TB</b><span class="span-info-servers">IPv6</span></div>
            <div class="col-md-2"><span class="server-spects-for-mobile">price</span> <b>$36</b>/mo</div>
            <div class="col-md-2"><a class="server-order-button" href="#">order now</a></div>
         </div>
         <div class="row justify-content-left server-tabls-row">
            <div class="col-md-2"><span class="server-spects-for-mobile">space</span> <b>320 GB </b>SSD</div>
            <div class="col-md-2"><span class="server-spects-for-mobile">cpu</span> <b>64 CPU</b></div>
            <div class="col-md-2"><span class="server-spects-for-mobile">ram</span> <b>12 GB</b></div>
            <div class="col-md-2"><span class="server-spects-for-mobile">bandwidth</span> <b>8 TB</b><span class="span-info-servers">IPv6</span></div>
            <div class="col-md-2"><span class="server-spects-for-mobile">price</span> <b>$46</b>/mo</div>
            <div class="col-md-2"><a class="server-order-button" href="#">order now</a></div>
         </div>
      </div>
      <div class="button-row text-center">
         <a class="btn jango-color-btn" href="#">create new account now</a>
      </div>
   </div>
</section>
<section class="padding-60-0-100 white-bg">
   <div class="container">
      <h5 class="title-default-coodiv-two">Simple & Powerful tools<span class="mr-tp-10">high performance 100% Intel CPU and 100% SSD bare metal platform.</span></h5>
      <div class="row justify-content-center mr-tp-40">
         <div class="col-md-3">
            <div class="box-features-one">
               <i class="e-flaticon-002-plug"></i>
               <h5>Stay connected all the time</h5>
            </div>
         </div>
         <div class="col-md-3">
            <div class="box-features-one">
               <i class="e-flaticon-025-router"></i>
               <h5>Stay connected all the time</h5>
            </div>
         </div>
         <div class="col-md-3">
            <div class="box-features-one">
               <i class="e-flaticon-043-remote-control"></i>
               <h5>No noisy neighbors</h5>
            </div>
         </div>
         <div class="col-md-3">
            <div class="box-features-one">
               <i class="e-flaticon-021-virtual-reality"></i>
               <h5>Powerful infrastructure</h5>
            </div>
         </div>
      </div>
      <div class="row justify-content-center mr-tp-10">
         <div class="col-md-3">
            <div class="box-features-one">
               <i class="e-flaticon-004-battery"></i>
               <h5>Many OS combinations</h5>
            </div>
         </div>
         <div class="col-md-3">
            <div class="box-features-one">
               <i class="e-flaticon-032-sata"></i>
               <h5>Root administrator access</h5>
            </div>
         </div>
         <div class="col-md-3">
            <div class="box-features-one">
               <i class="e-flaticon-036-air-conditioner"></i>
               <h5>No long term contracts</h5>
            </div>
         </div>
         <div class="col-md-3">
            <div class="box-features-one">
               <i class="e-flaticon-049-speaker"></i>
               <h5>No noisy neighbors</h5>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
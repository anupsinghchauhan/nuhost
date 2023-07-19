@extends('layouts.default')
@section('content')
<section class="first-items-home">
   <div class="container">
      <div class="row justify-content-left">
         <div class="col-md-4 item-icons">
            <span class="free-badje">free</span>
            <span class="nomber-overlow"><b>01</b></span>
            <i class="icon flaticon-bug color-1"></i>
            <h5>Full Security Team</h5>
            <p>Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</p>
            <div class="badje-link-footer"><a href="#">see more <i class="far fa-arrow-alt-circle-right"></i> </a></div>
         </div>
         <div class="col-md-4 item-icons">
            <span class="nomber-overlow"><b>02</b></span>
            <i class="icon flaticon-chip color-2"></i>
            <h5>Analytics</h5>
            <p>Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</p>
            <div class="badje-link-footer"><a href="#">see more <i class="far fa-arrow-alt-circle-right"></i> </a></div>
         </div>
         <div class="col-md-4 item-icons">
            <span class="nomber-overlow"><b>03</b></span>
            <i class="icon flaticon-063-flashlight color-3"></i>
            <h5>Analytics</h5>
            <p>Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</p>
            <div class="badje-link-footer"><a href="#">see more <i class="far fa-arrow-alt-circle-right"></i> </a></div>
         </div>
      </div>
   </div>
</section>
<section class="second-items-home">
   <div class="container">
      <div class="tittle-simple-one">
         <h5>Chose your best pricing plan<span>you want custom hosting plan.<br> No hidden charge.</span></h5>
      </div>
      <div class="mr-tp-70 mr-bt-50">
         <div class="row">
            <div id="monthly-yearly-chenge" class="col align-self-start">
               <a class="active monthly-price">monthly price</a>
               <a class="yearli-price">yearly price</a>
            </div>
            <div class="col align-self-end plan-contact-support-button text-right">
               <a href="#"><i class="far fa-life-ring"></i> 00123 456 78 90 11</a>
            </div>
         </div>
         <div class="row justify-content-left">
            <div class="col-md-4">
               <div class="tree-steps-hosting-plans first">
                  <div class="tree-steps-hosting-plans-header">
                     <i class="fas fa-fire tree-steps-hosting-plans-icon"></i>
                     <h5 class="tree-steps-hosting-plans-title">standard plan <small>for small projects</small></h5>
                     <span class="tree-steps-hosting-plans-price monthly">
                     <b class="monthly">$12<small>/month</small></b>
                     <b class="yearly">$133<small>/year</small></b>
                     </span>
                  </div>
                  <div id="first-plan-hosting-steps-content" class="tree-steps-hosting-plans-body first-plan-hosting-steps">
                     <div class="loader-tree-steps-hosting-plans-body">
                        <i class="fas fa-circle-notch rotate360icon"></i>
                     </div>
                     <ul class="tree-steps-hosting-plans-list">
                        <li class="checked">2 TB of space</li>
                        <li class="checked">unlimited bandwidth</li>
                        <li class="checked">full backup systems</li>
                        <li class="checked">free domain</li>
                        <li class="checked">unlimited database</li>
                        <li class="not-checked">live chat support</li>
                        <li class="not-checked">phone support</li>
                     </ul>
                     <div class="tree-steps-hosting-plans-payment">
                        <span id="first-plan-hosting" data-toggle="tooltip" data-placement="bottom" title="previous step" class="tree-steps-hosting-plans-footer-btn-back step-two-hosting">
                        <span class="first-stright"></span>
                        <span class="second-stright"></span>
                        </span>
                        <h5 class="tree-steps-hosting-plans-payment-title">payment <small>please login to your account to continue </small></h5>
                        <form class="tree-steps-hosting-plans-login-form" novalidate>
                           <div class="col-md-12 mb-3">
                              <label for="firstName">First name</label>
                              <input type="text" class="form-control" id="firstName" placeholder value required>
                           </div>
                           <div class="col-md-12 mb-3">
                              <label for="password">password</label>
                              <input type="password" class="form-control" id="password" placeholder value required>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1"><small>Remember Me</small></label>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="tree-steps-hosting-plans-footer text-center">
                     <a id="first-plan-hosting-steps" class="tree-steps-hosting-plans-footer-btn first-step-hosting">
                     <span class="first-step-hosting-text">
                     <small>next step</small>
                     <i class="fas fa-angle-right"></i>
                     </span>
                     <span class="second-step-hosting-text">
                     login
                     </span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="tree-steps-hosting-plans second">
                  <span class="tree-steps-hosting-plans-best">best plan</span>
                  <div class="tree-steps-hosting-plans-header">
                     <i class="fas fa-fire tree-steps-hosting-plans-icon"></i>
                     <h5 class="tree-steps-hosting-plans-title">advenced plan <small>for small projects</small></h5>
                     <span class="tree-steps-hosting-plans-price monthly">
                     <b class="monthly">$15<small>/month</small></b>
                     <b class="yearly">$140<small>/year</small></b>
                     </span>
                  </div>
                  <div id="second-plan-hosting-steps-content" class="tree-steps-hosting-plans-body">
                     <div class="loader-tree-steps-hosting-plans-body">
                        <i class="fas fa-circle-notch rotate360icon"></i>
                     </div>
                     <ul class="tree-steps-hosting-plans-list">
                        <li class="checked">2 TB of space</li>
                        <li class="checked">unlimited bandwidth</li>
                        <li class="checked">full backup systems</li>
                        <li class="checked">free domain</li>
                        <li class="checked">unlimited database</li>
                        <li class="checked">live chat support</li>
                        <li class="not-checked">phone support</li>
                     </ul>
                     <div class="tree-steps-hosting-plans-payment">
                        <span id="second-plan-hosting" data-toggle="tooltip" data-placement="bottom" title="previous step" class="tree-steps-hosting-plans-footer-btn-back step-two-hosting">
                        <span class="first-stright"></span>
                        <span class="second-stright"></span>
                        </span>
                        <h5 class="tree-steps-hosting-plans-payment-title">payment <small>choose your payment method </small></h5>
                        <form class="tree-steps-hosting-plans-login-form payment-method-form" novalidate>
                           <div class="row with-enic-padding">
                              <div class="custom-control custom-radio col-md-6 mb-3">
                                 <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                 <label class="custom-control-label" for="paypal"><img src="img/demo/paypal.png" alt /></label>
                              </div>
                              <div class="custom-control custom-radio col-md-6 mb-3">
                                 <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                 <label class="custom-control-label" for="credit"><img src="img/demo/card.png" alt /></label>
                              </div>
                           </div>
                           <br>
                           <div class="row with-enic-padding-twni">
                              <div class="col-md-12 mb-3">
                                 <label for="cc-number">Credit card number</label>
                                 <input type="text" class="form-control" id="cc-number" placeholder required>
                              </div>
                           </div>
                           <div class="row with-enic-padding-twni">
                              <div class="col-md-4 mb-3">
                                 <label for="cc-expiration">Expiration</label>
                                 <input type="text" class="form-control" id="cc-expiration" placeholder required>
                              </div>
                              <div class="col-md-1"></div>
                              <div class="col-md-3 mb-3">
                                 <label for="cc-expiration">CVV</label>
                                 <input type="text" class="form-control" id="cc-cvv" placeholder required>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="tree-steps-hosting-plans-footer text-center">
                     <a id="second-plan-hosting-steps" class="tree-steps-hosting-plans-footer-btn first-step-hosting">
                     <span class="first-step-hosting-text">
                     <small>next step</small>
                     <i class="fas fa-angle-right"></i>
                     </span>
                     <span class="second-step-hosting-text">
                     checkout
                     </span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="tree-steps-hosting-plans third">
                  <div class="tree-steps-hosting-plans-header">
                     <i class="fas fa-fire tree-steps-hosting-plans-icon"></i>
                     <h5 class="tree-steps-hosting-plans-title">entreprise plan <small>for big projects</small></h5>
                     <span class="tree-steps-hosting-plans-price monthly">
                     <b class="monthly">$19<small>/month</small></b>
                     <b class="yearly">$199<small>/year</small></b>
                     </span>
                  </div>
                  <div id="third-plan-hosting-steps-content" class="tree-steps-hosting-plans-body">
                     <div class="loader-tree-steps-hosting-plans-body">
                        <i class="fas fa-circle-notch rotate360icon"></i>
                     </div>
                     <ul class="tree-steps-hosting-plans-list">
                        <li class="checked">2 TB of space</li>
                        <li class="checked">unlimited bandwidth</li>
                        <li class="checked">full backup systems</li>
                        <li class="checked">free domain</li>
                        <li class="checked">unlimited database</li>
                        <li class="checked">live chat support</li>
                        <li class="checked">phone support</li>
                     </ul>
                     <div class="tree-steps-hosting-plans-payment">
                        <span id="third-plan-hosting" data-toggle="tooltip" data-placement="bottom" title="previous step" class="tree-steps-hosting-plans-footer-btn-back step-two-hosting">
                        <span class="first-stright"></span>
                        <span class="second-stright"></span>
                        </span>
                        <h5 class="tree-steps-hosting-plans-payment-title">error <small>this offre was ended </small></h5>
                        <div class="tree-steps-hosting-plans-error">
                           <i class="far fa-times-circle"></i>
                           <p>we are sorry, this offre was ended </p>
                        </div>
                     </div>
                  </div>
                  <div class="tree-steps-hosting-plans-footer text-center">
                     <a id="third-plan-hosting-steps" class="tree-steps-hosting-plans-footer-btn first-step-hosting">
                     <span class="first-step-hosting-text">
                     <small>next step</small>
                     <i class="fas fa-angle-right"></i>
                     </span>
                     <span class="second-step-hosting-text">
                     contact us
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="our-pertners">
   <div class="container">
      <h2 class="d-none">our pertners</h2>
      <div class="owl-carousel pertners-carousel owl-theme">
         <div class="item">
            <a href="#"> <img src="img/pertners/logo1.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="img/pertners/logo2.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="img/pertners/logo3.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="img/pertners/logo4.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="img/pertners/logo5.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="img/pertners/logo1.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="img/pertners/logo2.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="img/pertners/logo3.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="img/pertners/logo4.png" alt /> </a>
         </div>
         <div class="item">
            <a href="#"> <img src="img/pertners/logo5.png" alt /> </a>
         </div>
      </div>
   </div>
</section>
<section class="perlex-efect-section parallax-window" data-parallax="scroll" data-image-src="img/demo/bg.jpg">
   <span class="perlex-hidden-iverlow"></span>
   <div class="container">
      <div class="row justify-content-left">
         <div class="col-md-5">
            <div class="video-section-text-place">
               <span class="over-ole-grandient-orl"></span>
               <h5>Chose your best pricing plan</h5>
               <span class="post-category">hosting</span> <span class="post-date">19 march 2018</span>
               <p>Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</p>
               <a href="#">read more</a>
            </div>
         </div>
         <div class="col-md-7 video-section-play-place">
            <a class="video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#videomodal" href="#"><i class="fas fa-play"></i> <span class="first-text"><b>play</b> video</span> <span class="second-text"><b>click</b> here</span></a>
         </div>
      </div>
   </div>
</section>
<section class="our-sevices-section">
   <div class="container">
      <div class="tittle-simple-one">
         <h5>Chose your best pricing plan<span>you want custom hosting plan.<br> No hidden charge.</span></h5>
      </div>
   </div>
   <ul id="oursevices" class="carousel carousel-nav-services">
      <li class="carousel-cell">
         <a class="nav-link">
         <i class="flaticon-063-atomic"></i>
         <span class="title-tabs-of">Domains</span>
         </a>
      </li>
      <li class="carousel-cell">
         <a class="nav-link">
         <i class="flaticon-063-circuit"></i>
         <span class="title-tabs-of">web hosting</span>
         </a>
      </li>
      <li class="carousel-cell">
         <a class="nav-link">
         <i class="flaticon-063-smartphone"></i>
         <span class="title-tabs-of">resslers</span>
         </a>
      </li>
      <li class="carousel-cell">
         <a class="nav-link">
         <i class="flaticon-063-ufo"></i>
         <span class="title-tabs-of">support</span>
         </a>
      </li>
      <li class="carousel-cell">
         <a class="nav-link">
         <i class="flaticon-063-test-tube"></i>
         <span class="title-tabs-of">cloud hosting</span>
         </a>
      </li>
   </ul>
   <div class="carousel carousel-main-services">
      <div class="carousel-cell">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8 text-tab-content-algo text-center">
                  <div class="text-absoo">
                     <h5>Shared Web Hosting is your next powerful thing.</h5>
                     <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p>
                     <a href="#">GET STARTED NOW</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="carousel-cell">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-5">
                  <img src="img/demo/server.jpg" alt />
               </div>
               <div class="col-md-6 text-tab-content-algo">
                  <div class="text-absoo">
                     <h5>Shared Web Hosting is your next powerful thing.</h5>
                     <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p>
                     <a href="#">GET STARTED NOW</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="carousel-cell">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-5 text-tab-content-algo">
                  <div class="text-absoo">
                     <h5>Shared Web Hosting is your next powerful thing.</h5>
                     <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p>
                     <a href="#">GET STARTED NOW</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <img src="img/demo/server.jpg" alt />
               </div>
            </div>
         </div>
      </div>
      <div class="carousel-cell">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-5">
                  <img src="img/demo/server.jpg" alt />
               </div>
               <div class="col-md-6 text-tab-content-algo">
                  <div class="text-absoo">
                     <h5>Shared Web Hosting is your next powerful thing.</h5>
                     <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p>
                     <a href="#">GET STARTED NOW</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="carousel-cell">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-5 text-tab-content-algo">
                  <div class="text-absoo">
                     <h5>Shared Web Hosting is your next powerful thing.</h5>
                     <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p>
                     <a href="#">GET STARTED NOW</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <img src="img/demo/server.jpg" alt />
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="homepage-domain-section padding-80-100-100">
   <div class="container">
      <div class="tittle-simple-one">
         <h5>Looking for domain name ?</h5>
      </div>
      <div class="row justify-content-center">
         <form class="form-domain-home-stwo col-md-10">
            <div class="row justify-content-left">
               <div class="col-md-7 input-group">
                  <input type="text" class="form-control input-search-text" required>
                  <span class="input-group-prepend">entre your domain name</span>
               </div>
               <div class="col-md-2 input-group">
                  <input type="text" class="form-control input-search-dlt" required>
                  <span class="input-group-prepend">com ?</span>
               </div>
               <div class="col-md-3 input-group">
                  <button type="submit" class="btn btn-block btn-default text-uppercase btn-domain-check">check domain</button>
               </div>
            </div>
         </form>
         <div class="row justify-content-center">
            <div class="domain-price-homepage mr-auto">
               <a data-toggle="tooltip" data-placement="bottom" title="$8.99">
               <img src="img/domain/black/com.png" alt="domain">
               </a>
               <a data-toggle="tooltip" data-placement="bottom" title="$8.99">
               <img src="img/domain/black/net.png" alt="domain">
               </a>
               <a data-toggle="tooltip" data-placement="bottom" title="$8.99">
               <img src="img/domain/black/org.png" alt="domain">
               </a>
               <a data-toggle="tooltip" data-placement="bottom" title="$8.99" class="no-phon-dsply">
               <img src="img/domain/black/store.png" alt="domain">
               </a>
            </div>
         </div>
      </div>
      <div class="row justify-content-center domain-homepage-anouncement-hero">
         <div class="col-md-6 mt-auto mb-auto">
            <h4 class="domain-homepage-anouncement-title">Why do you need a <br>domain name?</h4>
            <p class="domain-homepage-anouncement-sub-title"> The most successful businesses use the same set of words and images in all customer touchpoints – on their website, in their emails and order confirmations, on their signs, etc.</p>
            <p class="domain-homepage-anouncement-sub-title-two"> This is branding at its simplest. And the digital pieces of your brand all spring from your domain name.</p>
            <br>
            <div id="fisrt-domains-offre-content" class="domain-homepage-anouncement-speacial">
               <span class="domain-tci">.tel</span>
               <a id="fisrt-domains-offre" class="domain-tci-order"><span>register</span></a>
               <div class="domain-tci-buttons">
                  <i id="fisrt-domains" data-toggle="tooltip" data-placement="top" title="add to cart" class="far fa-check-circle domain-tci-check"></i>
                  <i id="fisrt" data-toggle="tooltip" data-placement="top" title="cancel order" class="far fa-times-circle domain-tci-cancel"></i>
               </div>
               <form class="domain-homepage-anouncement-speacial-form">
                  <input placeholder="entre your domain name" type="text" class="form-control input-search-text-special" required>
               </form>
               <div class="domain-tci-added-to-card-mesage">
                  <span>this domain added successfully to your cart <a href="#">checkout</a></span>
               </div>
            </div>
            <div id="second-domains-offre-content" class="domain-homepage-anouncement-speacial">
               <span class="domain-tci">.one</span>
               <a id="second-domains-offre" class="domain-tci-order"><span>register</span></a>
               <div class="domain-tci-buttons">
                  <i id="second-domains" data-toggle="tooltip" data-placement="top" title="add to cart" class="far fa-check-circle domain-tci-check"></i>
                  <i id="second" data-toggle="tooltip" data-placement="top" title="cancel order" class="far fa-times-circle domain-tci-cancel"></i>
               </div>
               <form class="domain-homepage-anouncement-speacial-form">
                  <input placeholder="entre your domain name" type="text" class="form-control input-search-text-special" required>
               </form>
               <div class="domain-tci-added-to-card-mesage">
                  <span>this domain added successfully to your cart <a href="#">checkout</a></span>
               </div>
            </div>
            <div id="third-domains-offre-content" class="domain-homepage-anouncement-speacial">
               <span class="domain-tci">.hosting</span>
               <a id="third-domains-offre" class="domain-tci-order"><span>register</span></a>
               <div class="domain-tci-buttons">
                  <i id="third-domains" data-toggle="tooltip" data-placement="top" title="add to cart" class="far fa-check-circle domain-tci-check"></i>
                  <i id="third" data-toggle="tooltip" data-placement="top" title="cancel order" class="far fa-times-circle domain-tci-cancel"></i>
               </div>
               <form class="domain-homepage-anouncement-speacial-form">
                  <input placeholder="entre your domain name" type="text" class="form-control input-search-text-special" required>
               </form>
               <div class="domain-tci-added-to-card-mesage">
                  <span>this domain added successfully to your cart <a href="#">checkout</a></span>
               </div>
            </div>
         </div>
         <div class="col-md-6 row justify-content-center phone-no-sidepadding">
            <div class="col-md-6">
               <div class="domain-homepage-anouncement-box">
                  <div class="domain-homepage-anouncement-box-img">
                     <img src="img/svgs/book.svg" alt />
                  </div>
                  <h5>Stake your claim</h5>
                  <p>Registering domains related to your big idea or business name keeps others from using those names to pull traffic away from your website.</p>
               </div>
               <div class="domain-homepage-anouncement-box">
                  <div class="domain-homepage-anouncement-box-img">
                     <img src="img/svgs/ring.svg" alt />
                  </div>
                  <h5>Take control</h5>
                  <p>With a domain name, you can send customers, friends and prospects wherever you want – whether that’s a website, blog, social page or storefront.</p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="domain-homepage-anouncement-box margin-top-150">
                  <div class="domain-homepage-anouncement-box-img">
                     <img src="img/svgs/dollar.svg" alt />
                  </div>
                  <h5>Protect your rights</h5>
                  <p>Your domain gives you an exclusive piece of digital real estate that cannot be used by anyone else as long as it’s registered to you.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="counter-section">
   <div class="container">
      <div class="counter-middle-icon">
         <span class="icon-counter-sid"><i class="flaticon-063-molecules-1"></i></span>
         <h2 class="icon-counter-sid-title">our company <b>funny facts</b></h2>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-4 counter-number-tibo"><i class="flaticon-database-8"></i> <span><small class="counter">99.99</small>%</span> <b>off our server working now</b></div>
         <div class="col-md-4 counter-number-tibo pad-top-190"><i class="flaticon-plug"></i><span> <small class="counter">122</small></span><b>new website this week</b></div>
         <div class="col-md-4 counter-number-tibo"><i class="flaticon-shield-5"></i><span> <small class="counter">973.07</small>$</span> <b>checkout this day</b></div>
      </div>
   </div>
</section>
<section class="server-place-section">
   <div class="container zindextow">
      <div class="row justify-content-center">
         <div class="col-md-7">
            <div class="map-gene-server-place">
               <img src="img/map/map-world.png" alt />
               <span data-toggle="tooltip" data-placement="top" title="brazil" style="top: 68%;left: 33%;" class="place"></span>
               <span data-toggle="tooltip" data-placement="top" title="paris" style="top: 35%;left: 47%;" class="place"></span>
               <span data-toggle="tooltip" data-placement="top" title="paris" style="top: 45%;left: 50%;" class="place"></span>
               <span data-toggle="tooltip" data-placement="top" title="paris" style="top: 30%;left: 20%;" class="place"></span>
               <span data-toggle="tooltip" data-placement="top" title="paris" style="top: 33%;left: 22%;" class="place"></span>
               <span data-toggle="tooltip" data-placement="top" title="paris" style="top: 35%;left: 24%;" class="place"></span>
               <span data-toggle="tooltip" data-placement="top" title="paris" style="top: 37%;left: 26%;" class="place"></span>
            </div>
         </div>
      </div>
   </div>
</Section>
<section class="blog-home-section">
</section>
<section class="form-contact-home-section">
   <div class="container">
      <div class="row justify-content-center">
         <form class="col-md-8 row justify-content-center form-contain-home" id="ajax-contact" method="post" action="https://demo.coodiv.net/html/nuhost/html/mailer.php">
            <h5>Any Project In Your Mind ?<span>Or Just Say Hello</span></h5>
            <div id="form-messages"></div>
            <div class="col-md-6">
               <div class="field input-field">
                  <input class="form-contain-home-input" type="text" id="name" name="name" required>
                  <span class="input-group-prepend">entre your name</span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="field input-field">
                  <input class="form-contain-home-input" type="email" id="email" name="email" required>
                  <span class="input-group-prepend">entre your email</span>
               </div>
            </div>
            <div class="col-md-12">
               <div class="field input-field">
                  <textarea class="form-contain-home-input" id="message" name="message" required></textarea>
                  <span class="input-group-prepend">entre your message</span>
               </div>
            </div>
            <div class="btn-holder-contect">
               <button type="submit">Send</button>
            </div>
         </form>
      </div>
   </div>
</section>
@endsection
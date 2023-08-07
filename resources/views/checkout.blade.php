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
   <script type="text/javascript" src="assets/js/PasswordStrength.js"></script>
   <script type="text/javascript" src="templates/orderforms/standard_cart/js/scripts.min.js"></script>
   <script type="text/javascript">
    window.langPasswordStrength = "Password Strength";
    window.langPasswordWeak = "Weak";
    window.langPasswordModerate = "Moderate";
    window.langPasswordStrong = "Strong";
</script>
   
<section id="main-body">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 main-content">
            
           <div id="order-standard_cart">
<div class="row">
<div class="cart-sidebar">
<div menuItemName="Categories" class="panel card card-sidebar mb-3 panel-sidebar">
<div class="panel-heading card-header">
<h3 class="panel-title">
<i class="fas fa-shopping-cart"></i>&nbsp;
Categories
<i class="fas fa-chevron-up card-minimise panel-minimise pull-right float-right"></i>
</h3>
</div>
<div class="list-group collapsable-card-body">
<a menuItemName="bredh premium comparison" href="/index.php?rp=/store/bredh-premium-comparison" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-bredh_premium_comparison">
bredh premium comparison
</a>
<a menuItemName="bredh &amp; nuhost premium comparison" href="/index.php?rp=/store/bredh-and-nuhost-premium-comparison" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-bredh_&amp;_nuhost_premium_comparison">
bredh &amp; nuhost premium comparison
</a>
<a menuItemName="shared Hosting" href="/index.php?rp=/store/shared-hosting" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-shared_Hosting">
shared Hosting
</a>
</div>
</div>
<div menuItemName="Actions" class="panel card card-sidebar mb-3 panel-sidebar">
<div class="panel-heading card-header">
<h3 class="panel-title">
<i class="fas fa-plus"></i>&nbsp;
Actions
<i class="fas fa-chevron-up card-minimise panel-minimise pull-right float-right"></i>
</h3>
</div>
<div class="list-group collapsable-card-body">
<a menuItemName="Domain Registration" href="/cart.php?a=add&domain=register" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Actions-Domain_Registration">
<i class="fas fa-globe fa-fw"></i>&nbsp;
Register a New Domain
</a>
<a menuItemName="Domain Transfer" href="/cart.php?a=add&domain=transfer" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Actions-Domain_Transfer">
<i class="fas fa-share fa-fw"></i>&nbsp;
Transfer in a Domain
</a>
<a menuItemName="View Cart" href="/cart.php?a=view" class="list-group-item list-group-item-action active" id="Secondary_Sidebar-Actions-View_Cart">
<i class="fas fa-shopping-cart fa-fw"></i>&nbsp;
View Cart
</a>
</div>
</div>
</div>
<div class="cart-body">
<div class="header-lined">
<h1 class="font-size-36">Checkout</h1>
</div>
<div class="sidebar-collapsed">
<div class="pull-left form-inline float-left">
<form>
<select name="gid" id="gidForm" onchange="if (!window.__cfRLUnblockHandlers) return false; javascript:redirectToCartPage()" class="form-control" data-cf-modified-d3e56acdcd9bb713f0c3e334-="">
<optgroup label="Product Categories">
<option value="/index.php?rp=/store/bredh-premium-comparison">bredh premium comparison</option>
<option value="/index.php?rp=/store/bredh-and-nuhost-premium-comparison">bredh &amp; nuhost premium comparison</option>
<option value="/index.php?rp=/store/shared-hosting">shared Hosting</option>
</optgroup>
<optgroup label="Actions">
<option value="/cart.php?gid=registerdomain">Register a New Domain</option>
<option value="/cart.php?gid=transferdomain">Transfer in a Domain</option>
<option value="/cart.php?a=view">View Cart</option>
</optgroup>
</select>
</form>
</div>
</div>

<div class="already-registered clearfix">
<div class="pull-right float-right">
<button type="button" class="btn btn-info" id="btnAlreadyRegistered">
Already Registered?
</button>
<button type="button" class="btn btn-warning w-hidden" id="btnNewUserSignup">
Create a New Account
</button>
</div>
<p>Please enter your personal details and billing information to checkout.</p>
</div>
<form method="post" action="/cart.php?a=checkout" name="orderfrm" id="frmCheckout">
<input type="hidden" name="token" value="0d8abf375c93c07dc39b1318a8ff73cd3e21e67d" />
<input type="hidden" name="submit" value="true" />
<input type="hidden" name="custtype" id="inputCustType" value="new" />
<div id="containerExistingUserSignin" class="w-hidden">
<div class="sub-heading">
<span class="primary-bg-color">Existing Customer Login</span>
</div>
<div class="alert alert-danger w-hidden" id="existingLoginMessage">
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group prepend-icon">
<label for="inputLoginEmail" class="field-icon">
<i class="fas fa-envelope"></i>
</label>
<input type="text" name="loginemail" id="inputLoginEmail" class="field form-control" placeholder="Email Address" value="">
</div>
</div>
<div class="col-sm-6">
<div class="form-group prepend-icon">
<label for="inputLoginPassword" class="field-icon">
<i class="fas fa-lock"></i>
</label>
<input type="password" name="loginpassword" id="inputLoginPassword" class="field form-control" placeholder="Password">
</div>
</div>
</div>
<div class="text-center">
<button type="button" id="btnExistingLogin" class="btn btn-primary btn-md">
<span id="existingLoginButton">Login</span>
<span id="existingLoginPleaseWait" class="w-hidden">Please Wait...</span>
</button>
</div>
</div>
<div id="containerNewUserSignup">
<div>
</div>
<div class="sub-heading">
<span class="primary-bg-color">Personal Information</span>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group prepend-icon">
<label for="inputFirstName" class="field-icon">
<i class="fas fa-user"></i>
</label>
<input type="text" name="firstname" id="inputFirstName" class="field form-control" placeholder="First Name" value="" autofocus>
</div>
</div>
<div class="col-sm-6">
<div class="form-group prepend-icon">
<label for="inputLastName" class="field-icon">
<i class="fas fa-user"></i>
</label>
<input type="text" name="lastname" id="inputLastName" class="field form-control" placeholder="Last Name" value="">
</div>
</div>
<div class="col-sm-6">
<div class="form-group prepend-icon">
<label for="inputEmail" class="field-icon">
<i class="fas fa-envelope"></i>
</label>
<input type="email" name="email" id="inputEmail" class="field form-control" placeholder="Email Address" value="">
</div>
</div>
<div class="col-sm-6">
<div class="form-group prepend-icon">
<label for="inputPhone" class="field-icon">
<i class="fas fa-phone"></i>
</label>
<input type="tel" name="phonenumber" id="inputPhone" class="field form-control" placeholder="Phone Number" value="">
</div>
</div>
</div>
<div class="sub-heading">
<span class="primary-bg-color">Billing Address</span>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group prepend-icon">
<label for="inputCompanyName" class="field-icon">
<i class="fas fa-building"></i>
</label>
<input type="text" name="companyname" id="inputCompanyName" class="field form-control" placeholder="Company Name (Optional)" value="">
</div>
</div>
<div class="col-sm-12">
<div class="form-group prepend-icon">
<label for="inputAddress1" class="field-icon">
<i class="far fa-building"></i>
</label>
<input type="text" name="address1" id="inputAddress1" class="field form-control" placeholder="Street Address" value="">
</div>
</div>
<div class="col-sm-12">
<div class="form-group prepend-icon">
<label for="inputAddress2" class="field-icon">
<i class="fas fa-map-marker-alt"></i>
</label>
<input type="text" name="address2" id="inputAddress2" class="field form-control" placeholder="Street Address 2" value="">
</div>
</div>
<div class="col-sm-4">
<div class="form-group prepend-icon">
<label for="inputCity" class="field-icon">
<i class="far fa-building"></i>
</label>
<input type="text" name="city" id="inputCity" class="field form-control" placeholder="City" value="">
</div>
</div>
<div class="col-sm-5">
<div class="form-group prepend-icon">
<label for="state" class="field-icon" id="inputStateIcon">
<i class="fas fa-map-signs"></i>
</label>
<label for="stateinput" class="field-icon" id="inputStateIcon">
<i class="fas fa-map-signs"></i>
</label>
<input type="text" name="state" id="inputState" class="field form-control" placeholder="State" value="">
</div>
</div>
<div class="col-sm-3">
<div class="form-group prepend-icon">
<label for="inputPostcode" class="field-icon">
<i class="fas fa-certificate"></i>
</label>
<input type="text" name="postcode" id="inputPostcode" class="field form-control" placeholder="Postcode" value="">
</div>
</div>
<div class="col-sm-12">
<div class="form-group prepend-icon">
<label for="inputCountry" class="field-icon" id="inputCountryIcon">
<i class="fas fa-globe"></i>
</label>
<select name="country" id="inputCountry" class="field form-control">
<option value="AF">
Afghanistan
</option>
<option value="AX">
Aland Islands
</option>
<option value="AL">
Albania
</option>
<option value="DZ">
Algeria
</option>
<option value="AS">
American Samoa
</option>
<option value="AD">
Andorra
</option>
<option value="AO">
Angola
</option>
<option value="AI">
Anguilla
</option>
<option value="AQ">
Antarctica
</option>
<option value="AG">
Antigua And Barbuda
</option>
<option value="AR">
Argentina
</option>
<option value="AM">
Armenia
</option>
<option value="AW">
Aruba
</option>
<option value="AU">
Australia
</option>
<option value="AT">
Austria
</option>
<option value="AZ">
Azerbaijan
</option>
<option value="BS">
Bahamas
</option>
<option value="BH">
Bahrain
</option>
<option value="BD">
Bangladesh
</option>
 <option value="BB">
Barbados
</option>
<option value="BY">
Belarus
</option>
<option value="BE">
Belgium
</option>
<option value="BZ">
Belize
</option>
<option value="BJ">
Benin
</option>
<option value="BM">
Bermuda
</option>
<option value="BT">
Bhutan
</option>
<option value="BO">
Bolivia
</option>
<option value="BA">
Bosnia And Herzegovina
</option>
<option value="BW">
Botswana
</option>
<option value="BR">
Brazil
</option>
<option value="IO">
British Indian Ocean Territory
</option>
<option value="BN">
Brunei Darussalam
</option>
<option value="BG">
Bulgaria
</option>
<option value="BF">
Burkina Faso
</option>
<option value="BI">
Burundi
</option>
<option value="KH">
Cambodia
</option>
<option value="CM">
Cameroon
</option>
<option value="CA">
Canada
</option>
<option value="IC">
Canary Islands
</option>
<option value="CV">
 Cape Verde
</option>
<option value="KY">
Cayman Islands
</option>
<option value="CF">
Central African Republic
</option>
<option value="TD">
Chad
</option>
<option value="CL">
Chile
</option>
<option value="CN">
China
</option>
<option value="CX">
Christmas Island
</option>
<option value="CC">
Cocos (Keeling) Islands
</option>
<option value="CO">
Colombia
</option>
<option value="KM">
Comoros
</option>
<option value="CG">
Congo
</option>
<option value="CD">
Congo, Democratic Republic
</option>
<option value="CK">
Cook Islands
</option>
<option value="CR">
Costa Rica
</option>
<option value="CI">
Cote D'Ivoire
</option>
<option value="HR">
Croatia
</option>
<option value="CU">
Cuba
</option>
<option value="CW">
Curacao
</option>
<option value="CY">
Cyprus
</option>
<option value="CZ">
Czech Republic
</option>
<option value="DK">
Denmark
 </option>
<option value="DJ">
Djibouti
</option>
<option value="DM">
Dominica
</option>
<option value="DO">
Dominican Republic
</option>
<option value="EC">
Ecuador
</option>
<option value="EG">
Egypt
</option>
<option value="SV">
El Salvador
</option>
<option value="GQ">
Equatorial Guinea
</option>
<option value="ER">
Eritrea
</option>
<option value="EE">
Estonia
</option>
<option value="ET">
Ethiopia
</option>
<option value="FK">
Falkland Islands (Malvinas)
</option>
<option value="FO">
Faroe Islands
</option>
<option value="FJ">
Fiji
</option>
<option value="FI">
Finland
</option>
<option value="FR">
France
</option>
<option value="GF">
French Guiana
</option>
<option value="PF">
French Polynesia
</option>
<option value="TF">
French Southern Territories
</option>
<option value="GA">
Gabon
</option>
<option value="GM">
Gambia
</option>
 <option value="GE">
Georgia
</option>
<option value="DE">
Germany
</option>
<option value="GH">
Ghana
</option>
<option value="GI">
Gibraltar
</option>
<option value="GR">
Greece
</option>
<option value="GL">
Greenland
</option>
<option value="GD">
Grenada
</option>
<option value="GP">
Guadeloupe
</option>
<option value="GU">
Guam
</option>
<option value="GT">
Guatemala
</option>
<option value="GG">
Guernsey
</option>
<option value="GN">
Guinea
</option>
<option value="GW">
Guinea-Bissau
</option>
<option value="GY">
Guyana
</option>
<option value="HT">
Haiti
</option>
<option value="HM">
Heard Island & Mcdonald Islands
</option>
<option value="VA">
Holy See (Vatican City State)
</option>
<option value="HN">
Honduras
</option>
<option value="HK">
Hong Kong
</option>
<option value="HU">
Hungary
</option>
<option value="IS">
Iceland
</option>
<option value="IN">
India
</option>
<option value="ID">
Indonesia
</option>
<option value="IR">
Iran, Islamic Republic Of
</option>
<option value="IQ">
Iraq
</option>
<option value="IE">
Ireland
</option>
<option value="IM">
Isle Of Man
</option>
<option value="IL">
Israel
</option>
<option value="IT">
Italy
</option>
<option value="JM">
Jamaica
</option>
<option value="JP">
Japan
</option>
<option value="JE">
Jersey
</option>
<option value="JO">
Jordan
</option>
<option value="KZ">
Kazakhstan
</option>
<option value="KE">
Kenya
</option>
<option value="KI">
Kiribati
</option>
<option value="KR">
Korea
</option>
<option value="XK">
Kosovo
</option>
<option value="KW">
Kuwait
</option>
<option value="KG">
Kyrgyzstan
</option>
<option value="LA">
Lao People's Democratic Republic
</option>
<option value="LV">
Latvia
</option>
<option value="LB">
Lebanon
</option>
<option value="LS">
Lesotho
</option>
<option value="LR">
Liberia
</option>
<option value="LY">
Libyan Arab Jamahiriya
</option>
<option value="LI">
Liechtenstein
</option>
<option value="LT">
Lithuania
</option>
<option value="LU">
Luxembourg
</option>
<option value="MO">
Macao
</option>
<option value="MK">
Macedonia
</option>
<option value="MG">
Madagascar
</option>
<option value="MW">
Malawi
</option>
<option value="MY">
Malaysia
</option>
<option value="MV">
Maldives
</option>
<option value="ML">
Mali
</option>
<option value="MT">
Malta
</option>
<option value="MH">
Marshall Islands
</option>
<option value="MQ">
Martinique
</option>
<option value="MR">
Mauritania
</option>
<option value="MU">
Mauritius
</option>
<option value="YT">
Mayotte
</option>
<option value="MX">
Mexico
</option>
<option value="FM">
Micronesia, Federated States Of
</option>
<option value="MD">
Moldova
</option>
<option value="MC">
Monaco
</option>
<option value="MN">
Mongolia
</option>
<option value="ME">
Montenegro
</option>
<option value="MS">
Montserrat
</option>
<option value="MA">
Morocco
</option>
<option value="MZ">
Mozambique
</option>
<option value="MM">
Myanmar
</option>
<option value="NA">
Namibia
</option>
<option value="NR">
Nauru
</option>
<option value="NP">
Nepal
</option>
<option value="NL">
Netherlands
</option>
<option value="AN">
Netherlands Antilles
</option>
<option value="NC">
New Caledonia
</option>
<option value="NZ">
New Zealand
</option>
<option value="NI">
Nicaragua
</option>
<option value="NE">
Niger
</option>
<option value="NG">
Nigeria
 </option>
<option value="NU">
Niue
</option>
<option value="NF">
Norfolk Island
</option>
<option value="MP">
Northern Mariana Islands
</option>
<option value="NO">
Norway
</option>
<option value="OM">
Oman
</option>
<option value="PK">
Pakistan
</option>
<option value="PW">
Palau
</option>
<option value="PS">
Palestine, State of
</option>
<option value="PA">
Panama
</option>
<option value="PG">
Papua New Guinea
</option>
<option value="PY">
Paraguay
</option>
<option value="PE">
Peru
</option>
<option value="PH">
Philippines
</option>
<option value="PN">
Pitcairn
</option>
<option value="PL">
Poland
</option>
<option value="PT">
Portugal
</option>
<option value="PR">
Puerto Rico
</option>
<option value="QA">
Qatar
</option>
<option value="RE">
Reunion
</option>
<option value="RO">
Romania
</option>
 <option value="RU">
Russian Federation
</option>
<option value="RW">
Rwanda
</option>
<option value="BL">
Saint Barthelemy
</option>
<option value="SH">
Saint Helena
</option>
<option value="KN">
Saint Kitts And Nevis
</option>
<option value="LC">
Saint Lucia
</option>
<option value="MF">
Saint Martin
</option>
<option value="PM">
Saint Pierre And Miquelon
</option>
<option value="VC">
Saint Vincent And Grenadines
</option>
<option value="WS">
Samoa
</option>
<option value="SM">
San Marino
</option>
<option value="ST">
Sao Tome And Principe
</option>
<option value="SA">
Saudi Arabia
</option>
<option value="SN">
Senegal
</option>
<option value="RS">
Serbia
</option>
<option value="SC">
Seychelles
</option>
<option value="SL">
Sierra Leone
</option>
<option value="SG">
Singapore
</option>
<option value="SK">
Slovakia
</option>
<option value="SI">
Slovenia
</option>
<option value="SB">
Solomon Islands
</option>
<option value="SO">
Somalia
</option>
<option value="ZA">
South Africa
</option>
<option value="GS">
South Georgia And Sandwich Isl.
</option>
<option value="ES">
Spain
</option>
<option value="LK">
Sri Lanka
</option>
<option value="SD">
Sudan
</option>
<option value="SS">
South Sudan
</option>
<option value="SR">
Suriname
</option>
<option value="SJ">
Svalbard And Jan Mayen
</option>
<option value="SZ">
Swaziland
</option>
<option value="SE">
Sweden
</option>
<option value="CH">
Switzerland
</option>
<option value="SY">
Syrian Arab Republic
</option>
<option value="TW">
Taiwan
</option>
<option value="TJ">
Tajikistan
</option>
<option value="TZ">
Tanzania
</option>
<option value="TH">
Thailand
</option>
<option value="TL">
Timor-Leste
</option>
<option value="TG">
Togo
</option>
<option value="TK">
Tokelau
</option>
<option value="TO">
Tonga
</option>
<option value="TT">
Trinidad And Tobago
</option>
<option value="TN">
Tunisia
</option>
<option value="TR">
Turkey
</option>
<option value="TM">
Turkmenistan
</option>
<option value="TC">
Turks And Caicos Islands
</option>
<option value="TV">
Tuvalu
</option>
<option value="UG">
Uganda
</option>
<option value="UA">
Ukraine
</option>
<option value="AE">
United Arab Emirates
</option>
<option value="GB">
United Kingdom
</option>
<option value="US" selected>
United States
</option>
<option value="UM">
United States Outlying Islands
</option>
<option value="UY">
Uruguay
</option>
<option value="UZ">
Uzbekistan
</option>
<option value="VU">
Vanuatu
</option>
<option value="VE">
Venezuela
</option>
<option value="VN">
Viet Nam
</option>
<option value="VG">
Virgin Islands, British
</option>
<option value="VI">
Virgin Islands, U.S.
 </option>
<option value="WF">
Wallis And Futuna
</option>
<option value="EH">
Western Sahara
</option>
<option value="YE">
Yemen
</option>
<option value="ZM">
Zambia
</option>
<option value="ZW">
Zimbabwe
</option>
</select>
</div>
</div>
</div>
</div>
<div id="containerNewUserSecurity">
<div class="sub-heading">
<span class="primary-bg-color">Account Security</span>
</div>
<div id="containerPassword" class="row">
<div id="passwdFeedback" class="alert alert-info text-center col-sm-12 w-hidden"></div>
<div class="col-sm-6">
<div class="form-group prepend-icon">
<label for="inputNewPassword1" class="field-icon">
<i class="fas fa-lock"></i>
</label>
<input type="password" name="password" id="inputNewPassword1" data-error-threshold="50" data-warning-threshold="75" class="field form-control" placeholder="Password">
</div>
</div>
<div class="col-sm-6">
<div class="form-group prepend-icon">
<label for="inputNewPassword2" class="field-icon">
<i class="fas fa-lock"></i>
</label>
<input type="password" name="password2" id="inputNewPassword2" class="field form-control" placeholder="Confirm Password">
</div>
</div>
<div class="col-sm-6">
<button type="button" class="btn btn-default btn-sm generate-password" data-targetfields="inputNewPassword1,inputNewPassword2">
Generate Password
</button>
</div>
<div class="col-sm-6">
<div class="password-strength-meter">
<div class="progress">
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
</div>
</div>
<p class="text-center small text-muted" id="passwordStrengthTextLabel">Password Strength: Enter a Password</p>
</div>
</div>
</div>
</div>
<div class="sub-heading">
 <span class="primary-bg-color">Payment Details</span>
</div>
<div class="alert alert-success text-center large-text" role="alert" id="totalDueToday">
Total Due Today: &nbsp; <strong id="totalCartPrice">$35.00 USD</strong>
</div>
<div id="applyCreditContainer" class="apply-credit-container w-hidden" data-apply-credit="1">
<p>Your available credit balance is $0.00 USD.</p>
<label class="radio">
<input id="useCreditOnCheckout" type="radio" name="applycredit" value="1" checked>
<span id="spanFullCredit" class="w-hidden">
Apply <span>$35.00 USD</span> from my credit balance to this order. No further payment will be due.
</span>
<span id="spanUseCredit">
Apply <span>$0.00 USD</span> from my credit balance to this order and I will pay the remaining amount via the payment method selected below.
</span>
</label>
<label class="radio">
<input id="skipCreditOnCheckout" type="radio" name="applycredit" value="0">
Do not apply any credit from my credit balance to this order. I will pay for it using the payment method selected below.
</label>
</div>
<div id="paymentGatewaysContainer" class="form-group">
<p class="small text-muted">Please choose your preferred method of payment.</p>
<div class="text-center">
</div>
</div>
<div class="alert alert-danger text-center gateway-errors w-hidden"></div>
<div class="clearfix"></div>
<div class="cc-input-container w-hidden" id="creditCardInputFields">
<div class="row cvv-input" id="existingCardInfo">
<div class="col-lg-3 col-sm-4">
<div class="form-group prepend-icon">
<label for="inputCardCVV2" class="field-icon">
<i class="fas fa-barcode"></i>
</label>
<div class="input-group">
<input type="tel" name="cccvv" id="inputCardCVV2" class="field form-control" placeholder="CVV/CVC2" autocomplete="cc-cvc">
<span class="input-group-btn input-group-append">
<button type="button" class="btn btn-default" data-toggle="popover" data-placement="bottom" data-content="<img src='/assets/img/ccv.gif' width='210' />">
?
</button>
</span>
</div>
<span class="field-error-msg">The CVC number you entered does not appear to be valid.</span>
</div>
</div>
</div>
<ul>
<li>
<label class="radio-inline">
<input type="radio" name="ccinfo" value="new" id="new" checked="checked" />
&nbsp;
Enter New Card Information Below
</label>
</li>
</ul>
<div class="row" id="newCardInfo">
<div id="cardNumberContainer" class="col-sm-6 new-card-container">
<div class="form-group prepend-icon">
<label for="inputCardNumber" class="field-icon">
<i class="fas fa-credit-card"></i>
</label>
<input type="tel" name="ccnumber" id="inputCardNumber" class="field form-control cc-number-field" placeholder="Card Number" autocomplete="cc-number" data-message-unsupported="We are unable to accept the card type you entered. Please use a different card." data-message-invalid="The card number you entered does not appear to be valid." data-supported-cards="visa,mastercard,discover,amex,jcb,dinersclub" />
<span class="field-error-msg"></span>
</div>
</div>
<div class="col-sm-3 new-card-container">
<div class="form-group prepend-icon">
<label for="inputCardExpiry" class="field-icon">
<i class="fas fa-calendar-alt"></i>
</label>
<input type="tel" name="ccexpirydate" id="inputCardExpiry" class="field form-control" placeholder="MM / YY" autocomplete="cc-exp">
<span class="field-error-msg">The expiry date you entered does not appear to be valid.</span>
</div>
</div>
<div class="col-sm-3" id="cvv-field-container">
<div class="form-group prepend-icon">
<label for="inputCardCVV" class="field-icon">
<i class="fas fa-barcode"></i>
</label>
<div class="input-group">
<input type="tel" name="cccvv" id="inputCardCVV" class="field form-control" placeholder="CVV/CVC2" autocomplete="cc-cvc">
<span class="input-group-btn input-group-append">
<button type="button" class="btn btn-default" data-toggle="popover" data-placement="bottom" data-content="<img src='/assets/img/ccv.gif' width='210' />">
?
</button>
</span><br>
</div>
<span class="field-error-msg">The CVC number you entered does not appear to be valid.</span>
</div>
</div>
</div>
<div id="newCardSaveSettings">
<div class="row form-group new-card-container">
<div id="inputDescriptionContainer" class="col-md-6">
<div class="prepend-icon">
<label for="inputDescription" class="field-icon">
<i class="fas fa-pencil"></i>
</label>
<input type="text" class="field form-control" id="inputDescription" name="ccdescription" autocomplete="off" value="" placeholder="Enter a name for this card (Optional)" />
</div>
</div>
</div>
</div>
</div>
<div class="sub-heading">
<span class="primary-bg-color">Additional Notes</span>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
 <textarea name="notes" class="field form-control" rows="4" placeholder="You can enter any additional notes or information you want included with your order here..."></textarea>
</div>
</div>
</div>
<div class="marketing-email-optin">
<h4 class="font-size-18">Join our mailing list</h4>
<p>We would like to send you occasional news, information and special offers by email. Choose below whether you want to join our mailing list. You can unsubscribe at any time.</p>
<input type="checkbox" name="marketingoptin" value="1" checked class="no-icheck toggle-switch-success" data-size="small" data-on-text="Yes" data-off-text="No">
</div>
<div class="text-center">
<div class="text-center margin-bottom">
</div>
<button type="submit" id="btnCompleteOrder" class="btn btn-primary btn-lg disable-on-click spinner-on-click">
Complete Order &nbsp;<i class="fas fa-arrow-circle-right"></i>
</button>
</div>
</form>
<div class="alert alert-warning checkout-security-msg">
<i class="fas fa-lock"></i>
This order form is provided in a secure environment and to help protect against fraud your current IP address (<strong>122.170.105.215</strong>) is being logged.
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
           
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</section>
<script type="text/javascript" src="https://demo.coodiv.net/assets/js/jquery.payment.js"></script>
@endsection
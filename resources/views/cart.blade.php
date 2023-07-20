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

                  
                     
                     <div class="header-lined">
                        <h1 class="font-size-36">Review & Checkout</h1>
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
                                 <div class="view-cart-empty">
                                    Your Shopping Cart is Empty
                                 </div>
                              </div>
                           </form>
                           <div class="view-cart-tabs">
                              <ul class="nav nav-tabs" role="tablist">
                                 <li role="presentation" class="nav-item active">
                                    <a href="#applyPromo" class="nav-link active" aria-controls="applyPromo" role="tab" data-toggle="tab">
                                    Apply Promo Code
                                    </a>
                                 </li>
                              </ul>
                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane active promo" id="applyPromo">
                                    <form method="post" action="https://demo.coodiv.net/cart.php?a=view">
                                       <input type="hidden" name="token" value="9556054f3b5a6e310d92c298e5d894f1927ecd20" />
                                       <div class="form-group prepend-icon ">
                                          <label for="cardno" class="field-icon">
                                          <i class="fas fa-ticket-alt"></i>
                                          </label>
                                          <input type="text" name="promocode" id="inputPromotionCode" class="field form-control" placeholder="Enter promo code if you have one" required="required">
                                       </div>
                                       <button type="submit" name="validatepromo" class="btn btn-block btn-default" value="Validate Code">
                                       Validate Code
                                       </button>
                                    </form>
                                 </div>
                                 
                              </div>
                           </div>

                           {{-- checkout-form --}}

                           
                           <div class="login-head"><span>Вже зареєстровані?</span> <a href="index804a.html">Вхід</a></div>
                           <div class="login-wrapper">
                              <div class="login-form-container register-special">

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

                                 <h5 class="login-title">Sign Up</h5>
                                 <div id="registration">
                                    <form method="post" class="using-password-strength" action="https://demo.coodiv.net/register.php" role="form" name="orderfrm" id="frmCheckout">
                                       <input type="hidden" name="token" value="9556054f3b5a6e310d92c298e5d894f1927ecd20" />
                                       <input type="hidden" name="register" value="true" />
                                       <div id="containerNewUserSignup">
                                          <div class="sub-heading">
                                             <span>Персональні дані</span>
                                          </div>
                                          <div class="row">
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                   <input type="text" name="firstname" id="inputFirstName" class="field form-control" placeholder="Ім'я" value required autofocus>
                                                </div>
                                             </div>
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                   <input type="text" name="lastname" id="inputLastName" class="field form-control" placeholder="Прізвище" value required>
                                                </div>
                                             </div>
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                   <input type="email" name="email" id="inputEmail" class="field form-control" placeholder="Email-адреса" value>
                                                </div>
                                             </div>
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                   <input type="tel" name="phonenumber" id="inputPhone" class="field" placeholder="Телефон" value>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="sub-heading">
                                             <span>Платіжна адреса</span>
                                          </div>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <div class="form-group">
                                                   <input type="text" name="companyname" id="inputCompanyName" class="field" placeholder="Компанія (Опціонально)" value>
                                                </div>
                                             </div>
                                             <div class="col-sm-12">
                                                <div class="form-group">
                                                   <input type="text" name="address1" id="inputAddress1" class="field form-control" placeholder="Вулиця, адреса" value required>
                                                </div>
                                             </div>
                                             <div class="col-sm-12">
                                                <div class="form-group">
                                                   <input type="text" name="address2" id="inputAddress2" class="field" placeholder="Вулиця, адреса 2" value>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <input type="text" name="city" id="inputCity" class="field form-control" placeholder="Місто" value required>
                                                </div>
                                             </div>
                                             <div class="col-sm-5">
                                                <div class="form-group">
                                                   <input type="text" name="state" id="state" class="field form-control" placeholder="Район/область/штат" value required>
                                                </div>
                                             </div>
                                             <div class="col-sm-3">
                                                <div class="form-group">
                                                   <input type="text" name="postcode" id="inputPostcode" class="field form-control" placeholder="Поштовий індекс" value required>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <div class="form-group">
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
                                                      <option value="US" selected="selected">
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
                                             <span>Безпека акаунту</span>
                                          </div>
                                          <div id="containerPassword" class="row">
                                             <div id="passwdFeedback" style="display: none;" class="alert alert-info text-center col-sm-12"></div>
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                   <input type="password" name="password" id="inputNewPassword1" data-error-threshold="50" data-warning-threshold="75" class="field" placeholder="Пароль" autocomplete="off">
                                                </div>
                                             </div>
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                   <input type="password" name="password2" id="inputNewPassword2" class="field" placeholder="Підтвердіть пароль" autocomplete="off">
                                                </div>
                                             </div>
                                             <div class="col-sm-6" style="margin-bottom: 13px;">
                                                <button type="button" class="btn btn-default btn-sm generate-password" data-targetfields="inputNewPassword1,inputNewPassword2">
                                                Generate Password
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="marketing-email-optin">
                                          <h4>Join our mailing list</h4>
                                          <p>We would like to send you occasional news, information and special offers by email. Choose below whether you want to join our mailing list. You can unsubscribe at any time.</p>
                                          <input type="checkbox" name="marketingoptin" value="1" checked class="no-icheck toggle-switch-success" data-size="small" data-on-text="Так" data-off-text="Ні">
                                       </div>
                                       <br/>
                                       <p align="center">
                                          <input class="btn btn-large btn-primary" type="submit" value="Зареєструватись" />
                                       </p>
                                    </form>
                                 </div>

                                 <h5 class="login-title">Payment Method</h5>

                                 <ul>
                                    <li>PayPal (outside India)</li>
                                    <li>PayPal Credit Card / Debit Card (outside India)</li>
                                 </ul>
                              </div>
                           </div>
                           
                           {{-- checkout-form --}}



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
                                    <span id="subtotal" class="pull-right float-right">$0.00 USD</span>
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
                                    <span id="recurringAnnually" style="display:none;">
                                    <span class="cost"></span> Annually<br/>
                                    </span>
                                    <span id="recurringBiennially" style="display:none;">
                                    <span class="cost"></span> Biennially<br/>
                                    </span>
                                    <span id="recurringTriennially" style="display:none;">
                                    <span class="cost"></span> Triennially<br/>
                                    </span>
                                    </span>
                                 </div>
                                 <div class="total-due-today total-due-today-padded">
                                    <span id="totalDueToday" class="amt">$0.00 USD</span>
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
         <div class="clearfix"></div>
      </div>
   </div>
</section>
@endsection
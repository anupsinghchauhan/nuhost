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
   <script type="text/javascript" src="assets/js/StatesDropdown.js"></script>
   <script type="text/javascript" src="assets/js/PasswordStrength.js"></script>
   <script type="text/javascript">
      window.langPasswordStrength = "Password Strength";
      window.langPasswordWeak = "Weak";
      window.langPasswordModerate = "Moderate";
      window.langPasswordStrong = "Strong";
  </script>
  
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
               <h3 class="login-title">Welcome to our Support Portal.</h3>
            </div>
            <div class="item-footer">
               <div class="login-info">
                  <div class="login-copyright">© 2023, {{env('APP_NAME')}}</div>
                  <div class="login-menu">
                     <a href="{{URL('our-service')}}" class="kt-link">Our Service</a>
<a href="{{URL('contact-us')}}" class="kt-link">Contact</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="login-right-side-custom">
         <div class="login-head"><span>Already Registered?</span> <a href="{{URL('login')}}">Login</a></div>
         <div class="login-wrapper">
            <div class="login-form-container register-special">
               <h5 class="login-title">Sign Up</h5>
               @if ($errors->any())
               @foreach ($errors->all() as $error)
                  <div class="alert alert-danger">{{$error}}</div>
               @endforeach
               @endif
               <div id="registration">
                  <form method="post" class="using-password-strength" action="{{URL('validate-registration')}}" role="form" name="orderfrm" id="frmCheckout">
                     @csrf
                     <div id="containerNewUserSignup">
                        <div class="sub-heading">
                           <span>Personal Information</span>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="text" name="firstname" id="inputFirstName" class="field form-control" placeholder="First Name" value required autofocus>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="text" name="lastname" id="inputLastName" class="field form-control" placeholder="Last Name" value required>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="email" name="email" id="inputEmail" class="field form-control" placeholder="Email-address" value>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="tel" name="phonenumber" id="inputPhone" class="field" placeholder="Phone Number" value>
                              </div>
                           </div>
                        </div>
                        <div class="sub-heading">
                           <span>Billing Address</span>
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <input type="text" name="companyname" id="inputCompanyName" class="field" placeholder="Company Name (Optional)" value>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <input type="text" name="address1" id="inputAddress1" class="field form-control" placeholder="Street Address" value required>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <input type="text" name="address2" id="inputAddress2" class="field" placeholder="Street Address 2" value>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="form-group">
                                 <input type="text" name="city" id="inputCity" class="field form-control" placeholder="City" value required>
                              </div>
                           </div>
                           <div class="col-sm-5">
                              <div class="form-group">
                                 <input type="text" name="state" id="state" class="field form-control" placeholder="State" value required>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                                 <input type="text" name="postcode" id="inputPostcode" class="field form-control" placeholder="Postcode" value required>
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
                           <span>Account Security</span>
                        </div>
                        <div id="containerPassword" class="row">
                           <div id="passwdFeedback" style="display: none;" class="alert alert-info text-center col-sm-12"></div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="password" name="password" id="inputNewPassword1" data-error-threshold="50" data-warning-threshold="75" class="field" placeholder="Password" autocomplete="off">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="password" name="password2" id="inputNewPassword2" class="field" placeholder="Confirm Password" autocomplete="off">
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
                     <div class="marketing-email-optin">
                        <h4>Join our mailing list</h4>
                        <p>We would like to send you occasional news, information and special offers by email. Choose below whether you want to join our mailing list. You can unsubscribe at any time.</p>
                        <input type="checkbox" name="marketingoptin" value="1" checked class="no-icheck toggle-switch-success" data-size="small" data-on-text="Yes" data-off-text="No">
                     </div>
                     <br/>
                     <p align="center">
                        <input class="btn btn-large btn-primary" type="submit" value="Зареєструватись" />
                     </p>
                  </form>
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
<?php
use Illuminate\Support\Facades\Session;

if(!function_exists('arrPrices')){
    
    function arrPrices(){

        $currency = session('CURRENCY') != "" ? session('CURRENCY') : 'INR';
        $data['currency'] = $currency;
        $data['currency_symbol'] = config('siteconfig.CURRENCY.' . $currency . '.SYMBOL');
        $data['standard_price'] = config('siteconfig.STANDARD.' . $currency . '.PRICE');
        $data['advanced_price'] = config('siteconfig.ADVANCED.' . $currency . '.PRICE');
        $data['enterprise_price'] = config('siteconfig.ENTERPRISE.' . $currency . '.PRICE');
        $data['setup_fee'] = config('siteconfig.SETUP_CHARGE.' . $currency . '.PRICE');
        return $data;
    }
    
}

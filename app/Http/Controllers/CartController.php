<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        
        if(empty($cart) || $cart[array_keys($cart)[0]]['_url']=="") // GET FIRST PRODUCT IN CART
            return redirect('add-domain')->with('info', 'Please Enter Your Domain.');
        $arrPrices = arrPrices();
        return view('cart',compact('cart','arrPrices'));
    }

    public function addToCart(Request $request)
    {
        $product_name = $request->input('add_to_cart_product_name');
        $_hosting_duration = $request->input('_hosting_duration');
        $_mode = $request->input('_mode');
        
        // If the product is already in the cart, update the quantity
        $data = arrPrices();

        if($_mode == "update_duration"){

            $carts = Session::get('cart', []);
            
            if(empty($carts)) return redirect('web-hosting-starter')->with('error', 'Oops !! Somthing went wrong. Please try again.');

            $cart['cart'] = array(
                '_qty'=>1,
                '_price'=>$carts['cart']['_price'],
                '_hosting_name'=>$carts['cart']['_hosting_name'],
                '_hosting_duration'=>$_hosting_duration,
                '_url'=>$carts['cart']['_url'],
                '_hosting_duration'=>$_hosting_duration,
                '_net_amount'=>$carts['cart']['_price'] * $_hosting_duration,
                '_total'=>( $carts['cart']['_price'] * $_hosting_duration ) + $data['setup_fee'],
            ); 

        }else{

            $cart['cart'] = array(
                '_qty'=>1,
                '_price'=>$data[strtolower($product_name) . '_price'],
                '_hosting_name'=>$product_name,
                '_hosting_duration'=>$_hosting_duration,
                '_url'=>'',
                '_net_amount'=>$data[strtolower($product_name) . '_price'] * $_hosting_duration,
                '_total'=>( $data[strtolower($product_name) . '_price'] * $_hosting_duration ) + $data['setup_fee'],
            );    
        }

        // Store the updated cart in the session

        Session::put('cart', $cart);

        // Optionally, you can provide some feedback to the user
        if($_mode == "update_duration"){
            return redirect('cart')->with('success', 'Item updated successfully!');
        }else{
            return redirect('add-domain')->with('success', 'Item added to cart successfully! Please Enter Your Domain.');
        }
        
    }
}

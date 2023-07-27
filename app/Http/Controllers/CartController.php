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

        return view('cart',compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $product_name = $request->input('add_to_cart_product_name');

        // Retrieve the cart from the session
        //$cart = Session::get('cart', []);

        // If the product is already in the cart, update the quantity
        $data = arrPrices();
        $cart[$product_name] = array('_qty'=>1,'_price'=>$data[strtolower($product_name) . '_price'],'_name'=>$product_name,'_url'=>'');

        // Store the updated cart in the session
        Session::put('cart', $cart);

        // Optionally, you can provide some feedback to the user
        return redirect('add-domain')->with('success', 'Item added to cart successfully! Please Enter Your Domain.');
    }
}

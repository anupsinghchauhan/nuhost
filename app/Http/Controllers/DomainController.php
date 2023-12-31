<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class DomainController extends Controller
{
    public function addDomain()
    {
        $cart = Session::get('cart', []);
        return view('add-domian',compact('cart'));
    }

    public function addDomainProcess(Request $request)
    {
        $_qty = $request->input('_qty');
        $_price = $request->input('_price');
        $_hosting_name = $request->input('_hosting_name');
        $_host = $request->input('_host');
        $_host_type = $request->input('_host_type');
        $_hosting_duration = $request->input('_hosting_duration');
        
        // Retrieve the cart from the session
        $cart = Session::get('cart', []);
        
        // If the product is already in the cart, update the quantity
        if(!empty($cart)){
            $data = arrPrices();
            $cart['cart'] = array(
                '_qty'=>1,
                '_price'=>$data[strtolower($_hosting_name) . '_price'],
                '_hosting_name'=>$_hosting_name,
                '_url'=>$_host.'.'.$_host_type,
                '_hosting_duration'=>$_hosting_duration,
                '_net_amount'=>$data[strtolower($_hosting_name) . '_price'] * $_hosting_duration,
                '_total'=>( $data[strtolower($_hosting_name) . '_price'] * $_hosting_duration ) + $data['setup_fee'],
            );
        }
        
        // Store the updated cart in the session
        Session::put('cart', $cart);

        // Optionally, you can provide some feedback to the user
        return redirect('cart')->with('success', 'Item added to cart successfully!');
    }
}

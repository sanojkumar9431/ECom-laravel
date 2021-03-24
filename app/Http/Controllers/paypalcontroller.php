<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addProduct;
use Session;
use App\Models\cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class paypalcontroller extends Controller
{
    //
    function pay(Request $req)
    {
        if($req->session()->has('user'))
        {
        \Stripe\Stripe::setApiKey ( 'sk_test_51IVvvUBmVVLgh0OzaJVMK4x6SpT1aeCHMVTDbmMCEwB2WlNJwBq8rRw58SpVHGv9OFIBW6rHlCJjuo66Danj3EF1006yBXB5jD' );
        
        try {
        \Stripe\Charge::create ( array (
                "amount" => 300 * 100,
                "currency" => "inr",
                "source" => $req->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test payment." 
        ) );
        $req->session()->flash ( 'success-message', 'Payment done successfully !' );
        return Redirect::back();
    } catch ( \Exception $e ) {
        $req->session()->flash( 'fail-message', "Error! Please Try again." );
        return Redirect::back ();
    }
}
else{
    return redirect('/login');
}
        
    }
    function pricedata()
    {
        $userId=session()->get('user')['id'];
        $products =DB::table('cart')
        ->join('addproducts','cart.product_id','=','addproducts.id')
        ->where('cart.user_id',$userId)
        ->select('addproducts.*','cart.id as cart_id')
        ->get();

        
        return view('paywithpaypal',['products'=>$products]);
    }


}

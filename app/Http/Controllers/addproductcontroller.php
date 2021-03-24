<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addProduct;
use Session;
use App\Models\cart;
use Illuminate\Support\Facades\DB;


class addproductcontroller extends Controller
{

    function adminP(Request $req)
    {
        if($req->session()->has('admin'))
        {
            // print_r('asdasdasd');
            // return redirect('/login');
            return view('addproduct');
        }
        else{
        return redirect('login');
        }
    }
    //
    function saveData(Request $req)
    {
        if($req->session()->has('admin'))
        {
        $product= new addProduct;
        $product->name=$req->name;
        $product->price=$req->price;
        $product->category=$req->category;
        $product->user_id = auth()->id();
        $product->description=$req->description;
       // $product->image=$req->image;


       if($req->hasFile('image')){
           $file=$req->file('image');
           $destinationPath = public_path('/images');
           $extension =$file->getClientOriginalExtension();
           $filename=time() .'-'.$extension;
           $file->move($destinationPath,$filename);
           $product->image=$filename;
       }
       else{
           //return $req;
           $product->image='';
       }
       $product->quantity=$req->quantity;
        $product->save();
        return redirect('/addproduct');
    }
    else{
        return redirect('/login');
    }
    }
  
    function index(Request $req)
    {
        
       $data=addProduct::all();
       // return $data;
       return view('product',['addproducts'=>$data]);
 
    }

    function detail($id)
    {
        $data= addProduct::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req)
    {
        $data=addProduct::where('name','like','%'. $req->input('query').'%')->get();
        return view('search',['products'=>$data]); 
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->buyquantity=1;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartList(Request $req)
    {
        $userId=Session::get('user')['id'];
        $products =DB::table('cart')
        ->join('addproducts','cart.product_id','=','addproducts.id')
        ->where('cart.user_id',$userId) 
        ->select('addproducts.*','cart.id as cart_id')
        ->get(); 
        

      /*$cart=cart::find($req->id);
            $cart->buyquantity=$req->buyquantity;
            $cart->save(); 

            return 'done';*/

        return view('cartlist',['products'=>$products]); 
    }
    function removecart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }
    function checkout(Request $req)
    {
        $userId=Session::get('user')['id'];
        $products =DB::table('cart')
        ->join('addproducts','cart.product_id','=','addproducts.id')
        ->where('cart.user_id',$userId)
        ->select('addproducts.*','cart.id as cart_id')
        ->get();

        return view('checkout',['products'=>$products]);
    }

    function quantity(Request $req){
        $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->buyquantity=1;
            $cart->save();

    }

}

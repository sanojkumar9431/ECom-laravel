<?php

namespace App\Http\Controllers;
use App\Models\addProduct;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class removeproductcontroller extends Controller
{
    function indexR(Request $req)
    {
        if($req->session()->has('admin'))
        {
       $data=addProduct::all();
       // return $data;
       return view('removeproduct',['addproducts'=>$data]);
    }
    else{
        return redirect('/login');
    }
    }
    function removepro($id)
    {  
        addProduct::destroy($id);
        return redirect('removeproduct');
    }
}

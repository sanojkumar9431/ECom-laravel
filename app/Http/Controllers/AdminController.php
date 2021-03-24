<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\addProduct;
use Session;
use App\Models\cart;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //
    function adminA(Request $req)
    {
        if($req->session()->has('admin'))
        {
            //print_r('asdasdasd');die;
            //return redirect('/login');
            return view('admin');
        }
        return redirect('login');
        
    }

    function index()
    {
       $data=addProduct::all();

       return view('admin',['products'=>$data]);
       //return Product::all();

    }
}

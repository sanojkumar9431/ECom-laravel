<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addcategory;



class AddCategoryController extends Controller
{
    //
   function addData(Request $req)
    {
        if($req->session()->has('admin'))
        {
        $category = new addcategory;
        $category->category = $req->category;
        $category->save();
        return redirect('add');
        }
        else{
            return redirect('/login');
        }
    }
    
    public function create(Request $request)
{
    if($request->session()->has('admin'))
        {
     $category = addcategory::all();

     return view('addproduct', compact('category'));
    }
    else{
        return redirect('/login');
    }   
}
}

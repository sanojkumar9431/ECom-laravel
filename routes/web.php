<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddCategoryController;
use App\Http\Controllers\addproductcontroller;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\paypalcontroller;
use App\Http\Controllers\removeproductcontroller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
/*
Route::get('/logout', function () {
    
    Session::forget('user');
    Session::forget('admin');
    return redirect('login');
});*/


Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::get("/logout",[UserController::class,'logout']);
Route::get("/logoutadmin",[UserController::class,'logoutadmin']);

Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::Post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);

Route::view('/login/admin','admin');

Route::view('/addcategory','addcategory');


Route::view('add','addcategory');
Route::Post('add',[AddCategoryController::class,'addData']);

//Route::get('/addproduct',[addproductcontroller::class,'adminP']);

//Route::view('/addproduct','addproduct');

Route::get('/addproduct', [addproductcontroller::class,'index']);

Route::view('save','addproduct');
Route::Post('save',[addproductcontroller::class,'saveData']);


//Route::Post('save',[ProductController::class,'saveData']);
//Route::post("/",[AdminController::class,'admin']);

Route::get("addproduct",[AddCategoryController::class,'create']);

Route::get('/login/admin',[AdminController::class,'adminA']);

Route::get("/",[addproductcontroller::class,'index']);
Route::get("detail/{id}",[addproductcontroller::class,'detail']);
Route::get("search",[addproductcontroller::class,'search']);
Route::Post("add_to_cart",[addproductcontroller::class,'addToCart']);
Route::get("cartlist",[addproductcontroller::class,'cartList']);
Route::get("removecart/{id}",[addproductcontroller::class,'removeCart']);

//Route::view('/paywithpaypal','paywithpaypal');

//Route::get("paywithpaypal",[paypalcontroller::class,'cartList']);

Route::get('/paywithpaypal', function () {
    return view('paywithpaypal');
});  

Route::post ( "paywithpaypal", [paypalcontroller::class,'pay']);
Route::get("checkout",[addproductcontroller::class,'checkout']);
Route::get("paywithpaypal",[paypalcontroller::class,'pricedata']);
Route::view('/removeproduct','removeproduct');
Route::get("removeproduct",[removeproductcontroller::class,'indexR']);
Route::get("removeproduct/{id}",[removeproductcontroller::class,'removepro']);


Route::get('/login/admin',[AdminController::class,'index']);

//Route::get('cartlist',[cartcontroller::class,'addquantity']);
//Route::post("cartlist",[addproductcontroller::class,'checkout']);


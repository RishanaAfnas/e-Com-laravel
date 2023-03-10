<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;

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
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/register',"register");
Route::post('/login',[userController::class,'login']);
Route::post('/register',[userController::class,'register']);
Route::get('/',[productController::class,'index']);
Route::get('detail/{id}',[productController::class,'details']);
Route::get('search',[productController::class,'search']);
Route::post('add_to_cart',[productController::class,'addToCart']);
Route::get('cartlist',[productController::class,'cartlist']);
Route::get('removecart/{id}',[productController::class,'removeCart']);
Route::get('ordernow',[productController::class,'orderNow']);
Route::post('placeorder',[productController::class,'orderPlace']);
Route::get('myorders',[productController::class,'myOrders']);
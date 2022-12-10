<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ejemplo', function () {
    return view('ejemplo');
});
Route::get('/ruta', function () {
    return view('ruta');
});
Route::get('/platillos', function () {
    return view('platillos');
});
Route::get('/Form', function () {
    return view('Form');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/dream', function () {
    return view('dream');
});
Route::get('/hotel', function () {
    return view('hotel');
});

Route::post('/hotel',[App\Http\Controllers\BookingController::class,'store']);
Route::get('/user',[UserController::class,'index']);

Route::resource('supplier', App\Http\Controllers\SupplierController::class);

Route::resource('product', App\Http\Controllers\ProductController::class);

Route::resource('unit', App\Http\Controllers\UnitController::class);

Route::resource('category', App\Http\Controllers\CategoryController::class);

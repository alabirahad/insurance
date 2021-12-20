<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/claim', function () {
    return view('claim');
});
Route::get('/home-claim-form', function () {
    return view('homeClaimForm');
});
Route::get('/off-shop-claim-form', function () {
    return view('offShopClaimForm');
});

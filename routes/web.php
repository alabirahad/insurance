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

//employee claim
Route::get('/', function () {
    return view('employeeClaim');
});
Route::get('/employee-claim', function () {
    return view('employeeClaim');
});
Route::get('/employee-claim-form', function () {
    return view('employeeClaimForm');
});

//home claim
Route::get('/home-claim', function () {
    return view('homeClaim');
});
Route::get('/home-claim-form', function () {
    return view('homeClaimForm');
});

//office shop claim
Route::get('/off-shop-claim', function () {
    return view('offShopClaim');
});
Route::get('/off-shop-claim-form', function () {
    return view('offShopClaimForm');
});

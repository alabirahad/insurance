<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeClaimController;
use App\Http\Controllers\HomeClaimController;
use App\Http\Controllers\OfficeShopClaimController;
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
Route::post('/employee-claim-form/store', [EmployeeClaimController::class, "store"]);

//home claim
Route::get('/home-claim', function () {
    return view('homeClaim');
});
Route::get('/home-claim-form', function () {
    return view('homeClaimForm');
});
Route::post('/home-claim-form/store', [HomeClaimController::class, "store"]);

//office shop claim
Route::get('/off-shop-claim', function () {
    return view('offShopClaim');
});
Route::get('/off-shop-claim-form', function () {
    return view('offShopClaimForm');
});
Route::post('/off-shop-claim-form/store', [OfficeShopClaimController::class, "store"]);

//admin pannel
Route::get('/admin', [AdminController::class, "index"]);
Route::get('/admin-employee-claim', [AdminController::class, "employeeClaim"]);
Route::get('/admin-home-claim', [AdminController::class, "homeClaim"]);
Route::get('/admin-off-shop-claim', [AdminController::class, "offShopClaim"]);

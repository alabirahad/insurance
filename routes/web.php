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
Route::delete('/admin/{id}', [AdminController::class, "adminDestroy"]);
Route::get('/admin/create', [AdminController::class, "adminCreate"]);
Route::post('/admin/store', [AdminController::class, "adminStore"]);
Route::get('/admin/{id}/edit', [AdminController::class, "adminEdit"]);
Route::post('/admin/{id}/update', [AdminController::class, "adminUpdate"]);

Route::delete('/admin-employee-claim/{id}', [AdminController::class, "employeeClaimDestroy"]);
Route::get('/admin-employee-claim', [AdminController::class, "employeeClaim"]);
Route::get('/admin-employee-claim/{id}/show', [AdminController::class, "employeeClaimShow"]);

Route::get('/admin-home-claim', [AdminController::class, "homeClaim"]);
Route::get('/admin-home-claim/{id}/show', [AdminController::class, "homeClaimShow"]);
Route::delete('/admin-home-claim/{id}', [AdminController::class, "homeClaimDestroy"]);

Route::get('/admin-off-shop-claim', [AdminController::class, "offShopClaim"]);
Route::get('/admin-off-shop-claim/{id}/show', [AdminController::class, "offShopClaimShow"]);
Route::delete('/admin-off-shop-claim/{id}', [AdminController::class, "officeClaimDestroy"]);

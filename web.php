<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillinglistController;   
use App\Http\Controllers\CreateBillingController;
use App\Http\Controllers\BillingInfoController;
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
// Route::get('', function () {
//     return view('');
// });
Route::get('/login',[AuthController::class,'login']);
Route::get('/',[AuthController::class,'register']);
Route::post('/register-user',[AuthController::class,'registerUser'])->name('register-user');
Route::post('login-user',[AuthController::class,'loginUser'])->name('login-user');
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/billinglist',[BillinglistController::class,'billinglist']);//->middleware('isLoggedIn');


Route::get('/createbilling',[CreateBillingController::class,'createbilling']);
Route::post('/createbilling',[CreateBillingController::class,'createbilling']);

Route::get('/billinglist/delete/{rec_id}',[BillinglistController::class,'delete']);
Route::post('/add',[BillinglistController::class,'add'])->name('dashboard.add');




Route::get('/billinglistinfo',[ BillingInfoController::class,'billinglistinfo']);

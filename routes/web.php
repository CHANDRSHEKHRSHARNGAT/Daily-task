<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\FormController;
Route::get('form', [FormController::class, 'index']);
Route::post('store-form', [FormController::class, 'store']);

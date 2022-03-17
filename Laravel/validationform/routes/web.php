<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\FormController;
Route::get('form', [FormController::class, 'index']);
Route::post('store-form', [FormController::class, 'store']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/{lang}', ['as' => 'lang.switch', 
'uses' => '\App\Http\Controllers\LanguageController@switchLang']);

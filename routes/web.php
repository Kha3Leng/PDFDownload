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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/submitForm', 'App\Http\Controllers\UserDetailsController@store');
Route::get('/index', 'App\Http\Controllers\UserDetailsController@index');
Route::get('/downloadPDF/{id}', 'App\Http\Controllers\UserDetailsController@downloadPDF');
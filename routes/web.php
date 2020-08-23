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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','controllerPage@index');
Route::get('/ntu','controllerPage@ntu');
Route::get('/doValue','controllerPage@doValue');
Route::get('/kadarGaram','controllerPage@kadarGaram');
Route::get('/location','controllerPage@location');
Route::get('/gallery','controllerPage@gallery');
Route::get('/profile','controllerPage@profile');
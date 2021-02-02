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

Route::get('/', 'MainController@index') -> name('peripherals-index');
Route::get('/peripheral/{id}', 'MainController@show') -> name('peripherals-show');
Route::get('/new/peripheral', 'MainController@create') -> name('peripheral-create');
Route::post('/new/peripheral/store', 'MainController@store') -> name('peripheral-store');
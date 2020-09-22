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

Route::get('/', 'PageController@homeIndex')->name('index');

Route::get('Chi-siamo', 'PageController@aboutus')->name('aboutus');
Route::get('lista-dei-camion', 'PageController@listing')->name('listing');
Route::get('Contattaci', 'PageController@contactus')->name('contactus');
Route::get('dettaglio-del-camion', 'PageController@truckDetail')->name('truck.detail');

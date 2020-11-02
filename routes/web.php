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

Route::get('chi-siamo', 'PageController@aboutus')->name('aboutus');
Route::get('veicoli', 'PageController@listing')->name('listing');
Route::get('contattaci', 'PageController@contactus')->name('contactus');
Route::get('veicoli/{slug}/{id}', 'PageController@truckDetail')->name('truck.detail');

Route::post('contattaci/submit', 'PageController@submitContactForm')->name('contact.submit');

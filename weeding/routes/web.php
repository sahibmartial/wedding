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
Route::get('/home', function () {
    return view('invites.adjah');
});
//Invites 
Route::get("adjah","App\Http\Controllers\InviteController@index")->name('adjah');

Route::get("getinvite","App\Http\Controllers\InviteController@create")->name('getinvite');
Route::post("addinvite","App\Http\Controllers\InviteController@store")->name('addinvite');

Route::get("contact_Maya","App\Http\Controllers\ContactController@contact")->name('contact_Maya');

Route::post("contact_Maya_save","App\Http\Controllers\ContactController@postcontact")->name('contact_Maya_save');

Route::get("quinoussommes","App\Http\Controllers\InviteController@quinoussommes")->name("quinoussommes");

Route::get("getlistinvitesbylien","App\Http\Controllers\InviteController@getlistinvites")->name("getlistinvitesbylien");

Route::post("showlistinvitesbylien","App\Http\Controllers\InviteController@createPDF")->name("showlistinvitesbylien");

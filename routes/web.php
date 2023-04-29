<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
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

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/send/{id}', 'MessageController@send')->name('send_message');
Route::post('/store/{id}', 'MessageController@add')->name('store_message');

Route::get('/show', 'MessageController@index')->name('show_message');
Route::get('/visit', 'MessageController@visit')->name('visit');

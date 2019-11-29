<?php

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


use App\Mail\UserRegistered;
use App\User;
use Illuminate\Support\Facades\Mail;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//teste 1
Route::get('/contato', 'ContatoController@index');
Route::post('/contato', 'ContatoController@enviaEmail');
//Route::post('/contato', 'ContatoController@store');






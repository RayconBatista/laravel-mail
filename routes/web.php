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


Route::get('/contato', 'ContatoController@index');
Route::post('/contato', 'ContatoController@enviaEmail');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
    Route::get('files', 'FileEntriesController@index');
//uploads arquivos
    Route::get('files/create', 'FileEntriesController@create');
    Route::post('files/upload-file', 'FileEntriesController@uploadFile');
});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

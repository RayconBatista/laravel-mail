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

Route::get('/mail', function () {
//    return view('welcome');
    Mail::send('mail.alphart', ['curso' => 'Web Design'], function($m){
       $m->from('rayconlimabatista18@gmail.com', 'Raycon');
       $m->subject('Curso');
       $m->to('rayconbentes16@gmail.com');
    });
});

//Route::get('email/{id}', function ($id) {
//    $when = now() -> addMinutes(2);
//
//    $user = \App\User::findOrFail($id);
//    \Mail::to($user)->later($when, new \App\Mail\UserRegistered($user));
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

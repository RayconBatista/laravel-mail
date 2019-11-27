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

//Route::get('/mail', function () {
////    return view('welcome');
//    Mail::send('mail.alphart', ['curso' => 'Design'], function($m){
//       $m->from('rayconlimabatista18@gmail.com', 'Raycon');
//       $m->subject('Curso');
//       $m->to(['rayconbentes16@gmail.com', 'rayconlimabatista@gmail.com'] );
//    });
//});

use App\Mail\UserRegistered;
use App\User;
use Illuminate\Support\Facades\Mail;

Route::get('email/{id}', function ($id) {

//    Mail::send(new UserRegistered());
      $id=1;
      $user = User.where('id', $id)->first();
      Mail::to($user->email)->send(new SendMailUser($user));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

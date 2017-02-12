<?php

use App\User;
use App\Http\Controllers;

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

Route::get('test', function(){
  $user = new User;

  $user->email = "test2@test.com";
  $user->real_name = "Test Account 2";
  $user->password = "test2";

  $user->save();

  return "El usuario de prueba ha sido creado en la Base de Datos.";
  
});

Route::get('users/show', 'Users\UsersController@get_show');

Route::get('users/create', 'Users\UsersController@get_create');

Route::post('users/create', 'Users\UsersController@post_create');

Route::get('users/delete/{user_id}', 'Users\UsersController@get_delete');

Route::get('users/update/{user_id}', 'Users\UsersController@get_update');

Route::post('users/update/{user_id}', 'Users\UsersController@post_update');
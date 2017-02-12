<?php

namespace App\Http\Controllers\Users;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Collective\Html\HtmlFacade;

class UsersController extends Controller
{
	public function get_show(){
		$users = User::all();

		return View::make('users.show')->with('users', $users);
	}    
	
	public function get_create(){
	  return View::make('users.create');
	}	
	
	public function post_create(){
	  $user = new User;

	  $user->real_name = Input::get('real_name');
	  $user->email = Input::get('email');
	  $user->password = Input::get('password');

	  $user->save();

	  return Redirect::to ('users/show');		
	}	
	
	public function get_delete($user_id){
	  $user = User::find($user_id);

	  if(is_null($user)){
		return Redirect::to('users/show');
	  }

	  $user->delete();

	  return Redirect::to('users/show');
	}
	
	public function get_update($user_id){
	  $user = User::find($user_id);

	  if(is_null($user)){
		return Redirect::to('users/show');
	  }

	  return View::make('users.update')->with('user', $user);
	}

	public function post_update($user_id){
	  $user = User::find($user_id);

	  if(is_null($user)){
		return Redirect::to('users/show');
	  }

	  $user->real_name = Input::get('real_name');
	  $user->email = Input::get('email');

	  if(Input::has('password')){
		$user->password = Input::get('password');
	  }

	  $user->save();

	  return Redirect::to('users/show');	
	}	
	
}

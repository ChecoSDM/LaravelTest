<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
	public $restful = true;
	
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function __call($method, $parameters){
		return Response::error('404');
	}	
}

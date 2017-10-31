<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	return view('user.view');
    }

    public function create(){
    	return view('user.create');
    }

    public function edit($id){
    	$action = "edit";
    	return view('user.modal')->with("action", $action);
    }

    public function delete($id){
    	$action = "delete";
    	return view('user.modal')
				->with("action", $action)
				->with("id", $id);
    }
}

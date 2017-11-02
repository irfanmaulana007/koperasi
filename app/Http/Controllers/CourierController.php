<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CourierController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	return view('courier.view');
    }

    public function add(){
    	$action = "add";
    	return view('courier.modal')->with("action", $action);
    }

    public function edit($id){
    	$action = "edit";
    	return view('courier.modal')->with("action", $action);
    }

    public function delete($id){
    	$action = "delete";
    	return view('courier.modal')
				->with("action", $action)
				->with("id", $id);
    }
}

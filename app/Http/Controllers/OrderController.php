<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OrderController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function new_order(){
    	return view('order.new');
    }
    public function create_order(){
    	return view('order.create');
    }
}

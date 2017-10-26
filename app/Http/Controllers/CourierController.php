<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CourierController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function courier_list(){
    	return view('courier.view');
    }
}

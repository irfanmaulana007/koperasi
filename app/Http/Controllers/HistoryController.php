<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HistoryController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function order(){
    	return view('history.order.order');
    }
    public function order_all(){
    	return view('history.order.order_all');
    }
    public function order_pickuponly(){
    	return view('history.order.order_pickuponly');
    }

    public function shipment(){
    	return view('history.shipment.shipment');
    }
    public function shipment_all(){
    	return view('history.shipment.shipment_all');
    }
    public function shipment_pickuponly(){
    	return view('history.shipment.shipment_pickuponly');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	return view('layout.app');
    }
    
    public function login(){
        return view('auth.login');
    }
    
    public function content(){
    	return view('content');
    }
    
    public function profile(){
    	return view('profile');
    }
    
    public function invoice(){
    	return view('invoice');
    }

    public function table(){
        return view('table');
    }

    public function error_404(){
        return view('404-notfound');
    }
}

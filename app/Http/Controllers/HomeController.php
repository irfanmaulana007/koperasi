<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\User;
use Auth;

class HomeController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function index(){
    // 	return view('dashboard');
    // }

    public function index(){
        if(Auth::check()){
            $log = Log::where('id_user', Auth()->id)->get();
            if(count($log) == 1){
                $firstlogin = true;
            }else{
                $firstlogin = false;
            }
            return view('dashboard')
                    ->with('firstlogin', $firstlogin);
        }else{
            // dd(Auth::check());

            // return view('dashboard');
            return view('auth.login');
        }

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

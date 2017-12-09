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
            return view('dashboard');
        }else{
            return view('dashboard');
            // return view('auth.login');
        }

    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        Auth::attempt(['email' => $email, 'password' => $password]);
        if (Auth::check()) {
            return redirect()->action('HomeController@index');
        }else{
            $error = "Wrong email or password!";
            return redirect()->action('HomeController@index')->with('data', $error);
        }

        // dd(Auth::attempt());
        return redirect()->action('HomeController@index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
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

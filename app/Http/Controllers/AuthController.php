<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Log;
use Auth;

class AuthController extends Controller
{	

    public function login(Request $request){
        $afterlogin = true;
	    $credentials = [
	        'email' => $request['email'],
	        'password' => $request['password'],
	    ];

        Auth::attempt($credentials);
        if (Auth::check()) {
            if(Auth::user()->id_status == 2){
            	$log = new Log;
            	$log->id_user = Auth::id();
            	$log->save();
                return redirect()->action('HomeController@index')->with('afterlogin', $afterlogin);
            }else{
                $error = "User is not active yet!";
                return view('auth.login')->with('error', $error);   
            }
        }else{
            $error = "Wrong email or password!";
            return view('auth.login')->with('error', $error);
        }

        // dd(Auth::attempt());
        return redirect()->action('HomeController@index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
    public function register(){
        return view('auth.register');
    }
    
    public function doRegister(Request $request){
    	$user = new User;
    	$user->id_role = 3; // 3 = Role -> User
    	$user->id_status = 3; // 3 = Status -> Non Active
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = bcrypt($request->input('password'));
    	$user->phone = $request->input('phone');
    	$user->save();

	    // $credentials = [
	    //     'email' => $request['email'],
	    //     'password' => $request['password'],
	    // ];
     //    Auth::attempt($credentials);
    	$log = new Log;
    	$log->id_user = Auth::id();
    	$log->save();

        return redirect()->action('HomeController@index');
    }
}

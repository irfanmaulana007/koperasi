<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Log;
use Auth;

class AuthController extends Controller
{	

    public function login(Request $request){
        // $email = $request->input('email');
        // $password = $request->input('password');

	    $credentials = [
	        'email' => $request['email'],
	        'password' => $request['password'],
	    ];
	    // dd($credentials);

        Auth::attempt($credentials);
        // dd(Auth::attempt(['email' => $email, 'password' => $password]));
        if (Auth::check()) {
			return "akhirnya"        	;
            // return redirect()->action('HomeController@index');
        }else{
        	// return "gabisa masuk";
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
    	$user->id_status = 2; // 1 = Status -> Active
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = $request->input('password');
    	$user->phone = $request->input('phone');
    	$user->save();

    	$firstlogin = true;

        return redirect()->action('HomeController@index')
        				 ->with('firstlogin', $firstlogin);
    }
}

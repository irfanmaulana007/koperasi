<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\Log;
use App\User;
use App\TrsPinjaman;
use App\TrsAngsuran;
use App\TrsSimpanan;
use Auth;

class HomeController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        if(Auth::check()){
            $log = Log::where('id_user', Auth::id())->get();
            $user = User::get();
            $pinjaman = TrsPinjaman::where('id_status', 4)->sum('jumlah_pinjaman');
            $angsuran = TrsAngsuran::where('id_status', 4)->sum('jumlah_angsuran');
            $simpanan = TrsSimpanan::where('id_status', 4)->sum('jumlah_simpanan');
            $firstlogin = false;
            return view('dashboard', compact('log','user','pinjaman','angsuran','simpanan'))
                    ->with('firstlogin', $firstlogin);
        }else{
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

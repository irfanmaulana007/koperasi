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
use App\TrsTarikdana;
use App\SukuBunga;
use Auth;
use DB;

class HomeController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        if(Auth::check()){
            $log = Log::where('id_user', Auth::id())->get();
            $user = User::get();
            $pinjaman = TrsPinjaman::where('id_status', 4)->sum('jumlah_pinjaman');
            $pinjamanuser = TrsPinjaman::where('id_user', Auth::id())->where('id_status', 4)->sum('jumlah_pinjaman');
            $angsuran = TrsAngsuran::where('id_status', 4)->sum('jumlah_angsuran');
            // $totalangsuranuser = TrsAngsuran::sum('jumlah_angsuran');
            $angsuranuser = DB::table('trs_angsuran')
                        ->select('trs_angsuran.*', 'trs_pinjaman.id_user')
                        ->where('id_user', Auth::id())
                        ->join('trs_pinjaman','trs_angsuran.id_pinjaman','=','trs_pinjaman.id')
                        ->sum('jumlah_angsuran');
            $simpanan = TrsSimpanan::where('id_status', 4)->sum('jumlah_simpanan');
            $simpananuser = TrsSimpanan::where('id_user', Auth::id())->where('id_status', 4)->sum('jumlah_simpanan');
            $tarikdana = TrsTarikdana::where('id_status', 4)->sum('jumlah_tarikdana');
            $tarikdanauser = DB::table('trs_tarikdana')
                        ->select('trs_tarikdana.*', 'trs_simpanan.id_user')
                        ->where('id_user', Auth::id())
                        ->join('trs_simpanan','trs_tarikdana.id_simpanan','=','trs_simpanan.id')
                        ->sum('jumlah_tarikdana');
            $sukubunga = SukuBunga::get();
            $firstlogin = false;
            return view('dashboard', compact('log','user','pinjaman','pinjamanuser','angsuran','angsuranuser','simpanan','simpananuser','tarikdana','tarikdanauser','sukubunga'))
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

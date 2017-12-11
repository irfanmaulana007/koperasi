<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TrsPinjaman;
use App\User;
use Auth;
use DB;

class PinjamanListController extends Controller
{
	public function index(){
		$content = DB::table('trs_pinjaman')
						->select('trs_pinjaman.*', 'ms_user.name', 'ms_status.status_name')
	                	->where('id_user', Auth::id())
		 				->join('ms_user','trs_pinjaman.id_user','=','ms_user.id')
		 				->join('ms_status','trs_pinjaman.id_status','=','ms_status.id')
						->orderBy('created_at','Desc')
						->get();
        return View('transaction.pinjaman.index')->with('content', $content);
	}

	public function approve($id){
		$pinjaman = TrsPinjaman::where('id', $id)->first();
		$pinjaman->id_status = 4; // 4 = Status ->Approved
		$pinjaman->save();

        return redirect('/pinjaman-list')->with('success', 'Approve Pinjaman Successfully!');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamanListController extends Controller
{
	public function index(){
		return view('transaction.simpanan.index');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananListController extends Controller
{
	public function index(){
		return view('transaction.simpanan.index');
	}
}

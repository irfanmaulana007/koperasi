<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrsSimpananController extends Controller
{
	public function index(){
		return view('simpan.index');
	}
}

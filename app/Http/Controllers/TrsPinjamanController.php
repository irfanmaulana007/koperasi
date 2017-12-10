<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrsPinjamanController extends Controller
{
	public function index(){
		return view('pinjam.index');
	}
}

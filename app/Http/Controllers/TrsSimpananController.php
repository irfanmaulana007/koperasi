<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TrsSimpanan;
use App\TrsTarikdana;
use App\User;
use Auth;
use DB;

class TrsSimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = DB::table('trs_simpanan')
                        ->select('trs_simpanan.*', 'ms_status.status_name')
                        ->where('id_user', Auth::id())
                        ->join('ms_status','trs_simpanan.id_status','=','ms_status.id')
                        ->orderBy('created_at','Desc')
                        ->get();
        return view('simpan.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param['jumlah_simpanan'] = null;
        $param['keterangan'] = null;

        $content = (object) $param;
        return view('simpan.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = new TrsSimpanan;
        $simpan->id_user = Auth::id();
        $simpan->jumlah_simpanan = $request->input('jumlah');
        $simpan->keterangan = $request->input('keterangan');
        $simpan->id_status = 5; // 5 = Status -> Pending
        $simpan->save();

        return redirect('/simpan')->with('success', 'Request Simpanan Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $simpanan = TrsSimpanan::where('id',$id)->first();
        $param['id'] = $simpanan->id;
        $param['jumlah_simpanan'] = $simpanan->jumlah_simpanan;
        $param['keterangan'] = $simpanan->keterangan;

        $content = (object) $param;
        return View('simpan.create')->with('content', $content);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $simpan = TrsSimpanan::where('id',$id)->first();
        $simpan->id_user = Auth::id();
        $simpan->jumlah_simpanan = $request->input('jumlah');
        $simpan->keterangan = $request->input('keterangan');
        $simpan->id_status = 5; // 5 = Status -> Pending
        $simpan->save();

        return redirect('/simpan')->with('success', 'Update Request Simpanan Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $simpanan = TrsSimpanan::where('id',$id)->first();
        $simpanan->delete();

        if(Auth::user()->id_role == 2){ // 2 = Role -> Admin
           return redirect('/simpanan-list')->with('success', 'Delete Simpanan Successfully!');
        }else{
           return redirect('/simpan')->with('success', 'Delete Simpanan Successfully!');
        }
    }

    public function showall(){
        $content = DB::table('trs_simpanan')
                        ->select('trs_simpanan.*', 'ms_user.name', 'ms_status.status_name')
                        ->join('ms_user','trs_simpanan.id_user','=','ms_user.id')
                        ->join('ms_status','trs_simpanan.id_status','=','ms_status.id')
                        ->orderBy('created_at','Desc')
                        ->get();
        return View('transaction.simpanan.index')->with('content', $content);
    }

    public function approve($id){
        $simpanan = TrsSimpanan::where('id', $id)->first();
        $simpanan->id_status = 4; // 4 = Status ->Approved
        $simpanan->save();

        return redirect('/simpanan-list')->with('success', 'Approve Simpanan Successfully!');
    }

    // public function tarik($id){
    //     $simpanan = TrsSimpanan::where('id',$id)->first();
    //     $param['id'] = $simpanan->id;

    //     $content = (object) $param;
    //     return View('simpan.tarik')
    //             ->with('simpanan', $simpanan)
    //             ->with('content', $content);
    // }

    // public function tarikdana(Request $request){
    //     $id = $request->input('id');
    //     $jumlah = $request->input('jumlah');

    //     $simpanan = TrsSimpanan::where('id',$id)->first();
    //     $simpanan->jumlah_simpanan -= $jumlah;
    //     $simpanan->save();

    //     $tarikdana = new TrsTarikdana;
    //     $tarikdana->id_user = Auth::id();
    //     $tarikdana->jumlah_tarikan = $jumlah;
    //     $tarikdana->id_status = 5; // 5 = Status -> Pending
    //     $tarikdana->save();


    //     return redirect('/simpan')->with('success', 'Tarik Dana Simpanan Successfully!');
    // }
}

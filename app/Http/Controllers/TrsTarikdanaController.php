<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TrsTarikdana;
use App\TrsSimpanan;
use App\User;
use Auth;
use DB;

class TrsTarikdanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = TrsSimpanan::where('id_user', Auth::id())->where('id_status', 4)->orderBy('created_at','Desc')->get(); // 4 = Status -> Approved

        return view('tarikdana.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $param['jumlah_tarikdana'] = null;
        // $param['keterangan'] = null;

        // $content = (object) $param;
        // return view('tarikdana.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $tarikdana = new TrsTarikdana;
        // $tarikdana->id_user = Auth::id();
        // $tarikdana->jumlah_tarikdana = $request->input('jumlah');
        // $tarikdana->keterangan = $request->input('keterangan');
        // $tarikdana->id_status = 5; // 5 = Status -> Pending
        // $tarikdana->save();

        // return redirect('/tarikdana')->with('success', 'Request Angusran Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = DB::table('trs_tarikdana')
                        ->select('trs_tarikdana.*', 'ms_status.status_name')
                        ->where('id_simpanan', $id)
                        ->join('ms_status','trs_tarikdana.id_status','=','ms_status.id')
                        ->orderBy('created_at','Desc')
                        ->get();

        $jumlah_simpanan     = TrsTarikdana::where('id_simpanan', $id)->get();

        // $content = DB::table('trs_pinjaman')
        //                 ->select('trs_pinjaman.*', 'ms_status.status_name')
        //                 ->where('id_user', Auth::id())
        //                 ->where('id_status', 4) // 4 = Status -> Approved
        //                 ->join('ms_status','trs_pinjaman.id_status','=','ms_status.id')
        //                 ->orderBy('created_at','Desc')
        //                 ->get();
        // $pinjaman = TrsPinjaman::where('id_user', Auth::id())->get();
        // $content = TrsAnguran::get();
        return view('tarikdana.show')
                ->with('id', $id)
                ->with('content', $content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $tarikdana = TrsTarikdana::where('id',$id)->first();
        // $param['id'] = $tarikdana->id;
        // $param['jumlah_tarikdana'] = $tarikdana->jumlah_tarikdana;
        // $param['keterangan'] = $tarikdana->keterangan;

        // $content = (object) $param;
        // return View('tarikdana.create')->with('content', $content);
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
        // $tarikdana = TrsTarikdana::where('id',$id)->first();
        // $tarikdana->id_user = Auth::id();
        // $tarikdana->jumlah_tarikdana = $request->input('jumlah');
        // $tarikdana->keterangan = $request->input('keterangan');
        // $tarikdana->id_status = 5; // 5 = Status -> Pending
        // $tarikdana->save();

        // return redirect('/tarikdana')->with('success', 'Update Request Tarikdana Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarikdana = TrsTarikdana::where('id',$id)->first();
        $tarikdana->delete();

        if(Auth::user()->id_role == 2){ // 2 = Role -> Admin
           return redirect('/tarikdana-list')->with('success', 'Delete Tarikdana Successfully!');
        }else{
           return redirect('/tarikdana')->with('success', 'Delete Tarikdana Successfully!');
        }
    }

    public function tarikdana($id){
        $simpanan = TrsSimpanan::where('id', $id)->first();

        $param['id'] = $id;
        $param['jumlah_tarikdana'] = null;

        $content = (object) $param;
        return view('tarikdana.create')->with('content', $content);
    }

    public function doTarik(Request $request){
        $id = $request->input('id');

        $tarikdana = new TrsTarikdana;
        $tarikdana->id_simpanan = $id;
        $tarikdana->jumlah_tarikdana = $request->input('jumlah');
        $tarikdana->id_status = 5; // 5 = Status -> Pending
        $tarikdana->save();

        return redirect('/tarikdana/' . $id)->with('success', 'Create Angusran Successfully!');
    }

    public function showall(){
        $content = DB::table('trs_tarikdana')
                        ->select('trs_tarikdana.*', 'ms_status.status_name', 'trs_simpanan.id_user', 'trs_simpanan.keterangan', 'ms_user.name')
                        ->join('ms_status','trs_tarikdana.id_status','=','ms_status.id')
                        ->join('trs_simpanan','trs_tarikdana.id_simpanan','=','trs_simpanan.id')
                        ->join('ms_user','trs_simpanan.id_user','=','ms_user.id')
                        ->orderBy('created_at','Desc')
                        ->get();

        return View('transaction.tarikdana.index')->with('content', $content);
    }

    public function approve($id){
        $tarikdana = TrsTarikdana::where('id', $id)->first();
        $tarikdana->id_status = 4; // 4 = Status ->Approved
        $tarikdana->save();

        return redirect('/tarikdana-list')->with('success', 'Approve Angusran Successfully!');
    }
}

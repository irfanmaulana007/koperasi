<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SukuBunga;
use App\TrsPinjaman;
use App\User;
use Auth;
use DB;

class TrsPinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = DB::table('trs_pinjaman')
                        ->select('trs_pinjaman.*', 'ms_status.status_name')
                        ->where('id_user', Auth::id())
                        ->join('ms_status','trs_pinjaman.id_status','=','ms_status.id')
                        ->orderBy('created_at','Desc')
                        ->get();
        return view('pinjam.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sukubunga = SukuBunga::orderby('jangka_waktu')->get();
        $param['jumlah_pinjaman'] = null;
        $param['keterangan'] = null;

        $content = (object) $param;
        return view('pinjam.create')
                ->with('sukubunga', $sukubunga)
                ->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pinjam = new TrsPinjaman;
        $pinjam->id_user = Auth::id();
        $pinjam->id_sukubunga = $request->input('sukubunga');
        $pinjam->jumlah_pinjaman = $request->input('jumlah');
        $pinjam->keterangan = $request->input('keterangan');
        $pinjam->id_status = 5; // 5 = Status -> Pending
        $pinjam->save();

        return redirect('/pinjam')->with('success', 'Request Pinjaman Successfully!');
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
        $sukubunga = SukuBunga::orderby('jangka_waktu')->get();
        $pinjaman = TrsPinjaman::where('id',$id)->first();
        $param['id'] = $pinjaman->id;
        $param['jumlah_pinjaman'] = $pinjaman->jumlah_pinjaman;
        $param['id_sukubunga'] = $pinjaman->id_sukubunga;
        $param['keterangan'] = $pinjaman->keterangan;

        $content = (object) $param;
        return View('pinjam.create')
                ->with('sukubunga', $sukubunga)
                ->with('content', $content);
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
        $pinjam = TrsPinjaman::where('id',$id)->first();
        $pinjam->id_user = Auth::id();
        $pinjam->jumlah_pinjaman = $request->input('jumlah');
        $pinjam->keterangan = $request->input('keterangan');
        $pinjam->id_status = 5; // 5 = Status -> Pending
        $pinjam->save();

        return redirect('/pinjam')->with('success', 'Update Request Pinjaman Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjaman = TrsPinjaman::where('id',$id)->first();
        $pinjaman->delete();

        if(Auth::user()->id_role == 2){ // 2 = Role -> Admin
           return redirect('/pinjaman-list')->with('success', 'Delete Pinjaman Successfully!');
        }else{
           return redirect('/pinjam')->with('success', 'Delete Pinjaman Successfully!');
        }
    }

    public function showall(){
        $content = DB::table('trs_pinjaman')
                        ->select('trs_pinjaman.*', 'ms_user.name', 'ms_status.status_name')
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

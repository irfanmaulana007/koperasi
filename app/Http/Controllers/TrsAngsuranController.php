<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TrsAngsuran;
use App\TrsPinjaman;
use App\User;
use Auth;
use DB;

class TrsAngsuranController extends Controller
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
                        ->where('id_status', 4) // 4 = Status -> Approved
                        ->join('ms_status','trs_pinjaman.id_status','=','ms_status.id')
                        ->orderBy('created_at','Desc')
                        ->get();
        // $pinjaman = TrsPinjaman::where('id_user', Auth::id())->get();
        // $content = TrsAnguran::get();
        return view('angsur.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $param['jumlah_angsuran'] = null;
        // $param['keterangan'] = null;

        // $content = (object) $param;
        // return view('angsur.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $angsur = new TrsAngsuran;
        // $angsur->id_user = Auth::id();
        // $angsur->jumlah_angsuran = $request->input('jumlah');
        // $angsur->keterangan = $request->input('keterangan');
        // $angsur->id_status = 5; // 5 = Status -> Pending
        // $angsur->save();

        // return redirect('/angsur')->with('success', 'Request Angusran Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = DB::table('trs_angsuran')
                        ->select('trs_angsuran.*', 'ms_status.status_name')
                        ->where('id_pinjaman', $id)
                        ->join('ms_status','trs_angsuran.id_status','=','ms_status.id')
                        ->orderBy('created_at','Desc')
                        ->get();

        $jumlah_pinjaman = TrsAngsuran::where('id_pinjaman', $id)->get();

        // $content = DB::table('trs_pinjaman')
        //                 ->select('trs_pinjaman.*', 'ms_status.status_name')
        //                 ->where('id_user', Auth::id())
        //                 ->where('id_status', 4) // 4 = Status -> Approved
        //                 ->join('ms_status','trs_pinjaman.id_status','=','ms_status.id')
        //                 ->orderBy('created_at','Desc')
        //                 ->get();
        // $pinjaman = TrsPinjaman::where('id_user', Auth::id())->get();
        // $content = TrsAnguran::get();
        return view('angsur.show')
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
        // $angsuran = TrsAngsuran::where('id',$id)->first();
        // $param['id'] = $angsuran->id;
        // $param['jumlah_angsuran'] = $angsuran->jumlah_angsuran;
        // $param['keterangan'] = $angsuran->keterangan;

        // $content = (object) $param;
        // return View('angsur.create')->with('content', $content);
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
        // $angsur = TrsAngsuran::where('id',$id)->first();
        // $angsur->id_user = Auth::id();
        // $angsur->jumlah_angsuran = $request->input('jumlah');
        // $angsur->keterangan = $request->input('keterangan');
        // $angsur->id_status = 5; // 5 = Status -> Pending
        // $angsur->save();

        // return redirect('/angsur')->with('success', 'Update Request Angsuran Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $angsuran = TrsAngsuran::where('id',$id)->first();
        $angsuran->delete();

        if(Auth::user()->id_role == 2){ // 2 = Role -> Admin
           return redirect('/angsuran-list')->with('success', 'Delete Angsuran Successfully!');
        }else{
           return redirect('/angsur')->with('success', 'Delete Angsuran Successfully!');
        }
    }

    public function angsur($id){
        $pinjaman = TrsPinjaman::where('id', $id)->first();
        $angsuran = ($pinjaman->jumlah_pinjaman * 1.1) / 12; // 1.1 = Suku Bunga -> 10%

        $param['id'] = $id;
        $param['jumlah_angsuran'] = ceil($angsuran);

        $content = (object) $param;
        return view('angsur.create')->with('content', $content);
    }

    public function doAngsur(Request $request){
        $id = $request->input('id');

        $angsur = new TrsAngsuran;
        $angsur->id_pinjaman = $id;
        $angsur->jumlah_angsuran = $request->input('jumlah');
        $angsur->id_status = 5; // 5 = Status -> Pending
        $angsur->tanggal_pembayaran = $request->input('tanggal');
        $angsur->save();

        return redirect('/angsur/' . $id)->with('success', 'Create Angusran Successfully!');
    }

    public function showall(){
        $content = DB::table('trs_angsuran')
                        ->select('trs_angsuran.*', 'ms_status.status_name', 'trs_pinjaman.id_user', 'ms_user.name')
                        ->join('ms_status','trs_angsuran.id_status','=','ms_status.id')
                        ->join('trs_pinjaman','trs_angsuran.id_pinjaman','=','trs_pinjaman.id')
                        ->join('ms_user','trs_pinjaman.id_user','=','ms_user.id')
                        ->orderBy('created_at','Desc')
                        ->get();

        return View('transaction.angsuran.index')->with('content', $content);
    }

    public function approve($id){
        $angsuran = TrsAngsuran::where('id', $id)->first();
        $angsuran->id_status = 4; // 4 = Status ->Approved
        $angsuran->save();

        return redirect('/angsuran-list')->with('success', 'Approve Angusran Successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

use App\SukuBunga;
use Auth;

class SukuBungaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::forget('message');

        $content = SukuBunga::orderBy('jangka_waktu')->get();
        return View('master.sukubunga.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param['jangka_waktu'] = null;
        $param['suku_bunga'] = null;

        $content = (object) $param;
        return View('master.sukubunga.create')
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
        $sukubunga = new SukuBunga;
        $sukubunga->jangka_waktu = $request->get('jangka_waktu');
        $sukubunga->suku_bunga = $request->get('suku_bunga');
        $sukubunga->created_id = Auth::id();

        $sukubunga->save();
        
        return redirect('/master/suku-bunga')->with('success', 'Create SukuBunga Successfully!');
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
        $sukubunga = SukuBunga::where('id',$id)->first();
        $param['id'] = $sukubunga->id;
        $param['jangka_waktu'] = $sukubunga->jangka_waktu;
        $param['suku_bunga'] = $sukubunga->suku_bunga;

        $content = (object) $param;
        return View('master.sukubunga.create')->with('content', $content);
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
        $sukubunga = SukuBunga::where('id',$id)->first();
        $sukubunga->jangka_waktu = $request->get('jangka_waktu');
        $sukubunga->suku_bunga = $request->get('suku_bunga');
        $sukubunga->save();

        return redirect('/master/suku-bunga')->with('success', 'Update SukuBunga Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sukubunga = SukuBunga::where('id',$id)->first();
        $sukubunga->delete();

        return redirect('/master/suku-bunga')->with('success', 'Delete SukuBunga Successfully!');
    }
}

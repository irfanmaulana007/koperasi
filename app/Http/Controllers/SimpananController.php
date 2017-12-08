<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

use App\Simpanan;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::forget('message');

        $content = Simpanan::orderBy('simpanan_name')->get();
        return View('master.simpanan.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param['simpanan_name'] = null;

        $content = (object) $param;
        return View('master.simpanan.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpanan = new Simpanan;
        $simpanan->simpanan_name = $request->get('name');
        $simpanan->created_id = 35;

        $simpanan->save();
        
        return redirect('/master/simpanan')->with('success', 'Create Simpanan Successfully!');
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
        $simpanan = Simpanan::where('id',$id)->first();
        $param['id'] = $simpanan->id;
        $param['simpanan_name'] = $simpanan->simpanan_name;

        $content = (object) $param;
        return View('master.simpanan.create')->with('content', $content);
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
        $simpanan = Simpanan::where('id',$id)->first();
        $simpanan->simpanan_name = $request->get('name');
        $simpanan->created_id = 27;
        $simpanan->save();

        return redirect('/master/simpanan')->with('success', 'Update Simpanan Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $simpanan = Simpanan::where('id',$id)->first();
        $simpanan->delete();

        return redirect('/master/simpanan')->with('success', 'Delete Simpanan Successfully!');
    }
}

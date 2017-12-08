<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

use App\Pinjaman;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::forget('message');

        $content = Pinjaman::orderBy('pinjaman_name')->get();
        return View('master.pinjaman.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param['pinjaman_name'] = null;

        $content = (object) $param;
        return View('master.pinjaman.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pinjaman = new Pinjaman;
        $pinjaman->pinjaman_name = $request->get('name');
        $pinjaman->created_id = 35;

        $pinjaman->save();
        
        return redirect('/master/pinjaman')->with('success', 'Create Pinjaman Successfully!');
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
        $pinjaman = Pinjaman::where('id',$id)->first();
        $param['id'] = $pinjaman->id;
        $param['pinjaman_name'] = $pinjaman->pinjaman_name;

        $content = (object) $param;
        return View('master.pinjaman.create')->with('content', $content);
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
        $pinjaman = Pinjaman::where('id',$id)->first();
        $pinjaman->pinjaman_name = $request->get('name');
        $pinjaman->created_id = 27;
        $pinjaman->save();

        return redirect('/master/pinjaman')->with('success', 'Update Pinjaman Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjaman = Pinjaman::where('id',$id)->first();
        $pinjaman->delete();

        return redirect('/master/pinjaman')->with('success', 'Delete Pinjaman Successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

use App\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::forget('message');

        $content = Status::orderBy('status_name')->get();
        return View('master.status.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param['status_name'] = null;

        $content = (object) $param;
        return View('master.status.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = new Status;
        $status->status_name = $request->get('name');
        $status->created_id = 35;

        $status->save();
        
        return redirect('/master/status')->with('success', 'Create Status Successfully!');
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
        $status = Status::where('id',$id)->first();
        $param['id'] = $status->id;
        $param['status_name'] = $status->status_name;

        $content = (object) $param;
        return View('master.status.create')->with('content', $content);
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
        $status = Status::where('id',$id)->first();
        $status->status_name = $request->get('name');
        $status->created_id = 27;
        $status->save();

        return redirect('/master/status')->with('success', 'Update Status Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Status::where('id',$id)->first();
        $status->delete();

        return redirect('/master/status')->with('success', 'Delete Status Successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

use App\User;
use App\Role;
use App\Status;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::forget('message');

        $content = User::where('id_role',3)->orderBy('name')->get();
        return View('user.index')->with('content', $content);
    }

    public function staff()
    {
        Session::forget('message');

        $content = User::where('id_role',2)->orderBy('name')->get();
        return View('user.staff')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::get();
        $status = Status::get();

        $param['id_role'] = null;
        $param['id_status'] = null;
        $param['name'] = null;
        $param['email'] = null;
        $param['phone'] = null;
        $param['simpanan'] = null;

        $content = (object) $param;
        return View('user.create')
                ->with('content', $content)
                ->with('role', $role)
                ->with('status', $status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->id_role = $request->get('role');
        $user->id_status = $request->get('status');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->simpanan = $request->get('simpanan');

        $user->save();
        
        return redirect('/user')->with('success', 'Create User Successfully!');
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
        $role = Role::get();
        $status = Status::get();

        $user = User::where('id',$id)->first();
        $param['id'] = $user->id;
        $param['id_role'] = $user->id_role;
        $param['id_status'] = $user->id_status;
        $param['name'] = $user->name;
        $param['email'] = $user->email;
        $param['phone'] = $user->phone;
        $param['simpanan'] = $user->simpanan;

        $content = (object) $param;
        return View('user.create')
                ->with('content', $content)
                ->with('role', $role)
                ->with('status', $status);
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
        $user = User::where('id',$id)->first();
        $user->id_role = $request->get('role');
        $user->id_status = $request->get('status');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->simpanan = $request->get('simpanan');

        $user->save();

        return redirect('/user')->with('success', 'Update User Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->first();
        $user->delete();

        return redirect('/user')->with('success', 'Delete User Successfully!');
    }
}

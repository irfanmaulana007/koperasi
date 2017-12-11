<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;

use App\User;
use App\Role;
use App\Status;
use App\Saldo;
use App\TrsPinjaman;

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

        $content = DB::table('ms_user')
                        ->select('ms_user.*', 'ms_status.status_name')
                        ->where('id_role', 3) // 3 = Role -> User
                        ->join('ms_status','ms_user.id_status','=','ms_status.id')
                        ->orderBy('created_at','Desc')
                        ->get();

        return View('user.index')
                ->with('content', $content);
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
        $status = Status::where('id', 2)->orwhere('id', 3)->get();
        $saldo = Saldo::get();

        $param['id_role'] = null;
        $param['id_status'] = null;
        $param['name'] = null;
        $param['email'] = null;
        $param['password'] = null;
        $param['phone'] = null;
        $param['simpanan'] = null;

        $content = (object) $param;
        return View('user.create')
                ->with('content', $content)
                ->with('role', $role)
                ->with('status', $status)
                ->with('saldo', $saldo);
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
        $user->password = bcrypt($request->get('password'));
        $user->phone = $request->get('phone');
        $user->save();

        $saldo = new Saldo;
        $saldo->id_user = $user->id;
        $saldo->saldo = 0;
        $saldo->save();
        
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
        $param['password'] = $user->password;
        $param['phone'] = $user->phone;

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
        $user->password = bcrypt($request->get('password'));
        $user->phone = $request->get('phone');

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

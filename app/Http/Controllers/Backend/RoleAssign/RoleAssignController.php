<?php

namespace App\Http\Controllers\Backend\RoleAssign;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleAssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::with(['roles' => function($q){
            $q->select('id','name')->whereNotIn('name',['super-admin']);
        }])->get(['id','name','email'])->whereNotIn('id',1);
        // return $users;
        // exit();
        return view('backend-app.role-assign.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend-app.role-assign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        $users = User::with(['roles'=> function($q){
            $q->select('id','name')->whereNotIn('name',['super-admin']);
        }])->get(['id','name'])->where('id',$id)->whereNotIn('id',1);

        $roles = Role::get(['id','name'])->whereNotIn('name',['super-admin']);
        // return $roles;
        // exit();
        return view('backend-app.role-assign.edit',compact('users','roles'));
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
        //
        $users = User::find($id);
        $users->name = $request->name;
        $users->syncRoles($request->role);
        $users->save();
        return redirect(route('dashboard.role-assign.index'))->with('success','Role edited successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

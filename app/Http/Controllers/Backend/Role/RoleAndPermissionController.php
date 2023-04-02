<?php

namespace App\Http\Controllers\Backend\Role;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
 

class RoleAndPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::with('permissions:id,name')->get(['id','name','created_at'])->whereNotIn('name',['super-admin']);
        // $permissions = Permission::get(['id','name','created_at']);
        // return $roles;
        // exit();
        return view('backend-app.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get(['id','name']);
        return view('backend-app.role.create',compact('permissions'));
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
        $roles = new Role();
        $roles->name = $request->role;
        $roles->save();

        $roles->givePermissionTo($request->permission);
        return redirect()->route('dashboard.role.index')->with('success','Role and permission assigned');
        
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
        $roles = Role::where('id',$id)->with('permissions:id,name')->get(['id','name'])->whereNotIn('name',['super-admin']);
        $permissions = Permission::get(['id','name']);
        // return $permissions;
        // exit();

        return view('backend-app.role.edit',compact('roles','permissions'));
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
        $role = Role::find($id);
        $role->name = $request->role;
        $role->save();
         
        $role->syncPermissions($request->permission);
        return redirect()->route('dashboard.role.index')->with('success','Role update successfully');
        
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
        $roles = Role::find($id);
        $roles->delete();
        return redirect()->route('dashboard.role.index');
    }


    public function permission(Request $request){
        $permissions = new Permission();
        $permissions->name = $request->permission;
        $permissions->save();
        return back()->with('success','Permission added successfully');

    }
}

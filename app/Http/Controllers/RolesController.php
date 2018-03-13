<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

use App\Role;
use App\Permission;
use Session;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles  =   Role::all();
        return view('admin.roles.index')->with('roles',$roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create')->with('permissions',Permission::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permissions = Permission::all();
       $role =  Role::create($request->except(['permission','_token']));
       foreach($permissions as $key=>$value){
           $role->attachPermission($value);
       }
       Session::flash('success','roles added succesfully');
       return redirect()->route('roles');
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
        $role = Role::find($id);
        $permissions = Permission::all();
        $role_permission = $role->perms()->pluck('id','id')->toArray();
        return view('admin.roles.edit',compact(['role','role_permission', 'permissions']));
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
        $role = Role::find($id);
        $role->name  =$request->name;
        $role->display_name  =$request->display_name;
        $role->description  =$request->description;
        $role->save();

        DB::table('permission_role')->where('role_id',$id)->delete();
        foreach($request->$permission as $key => $value){
                $role->attachPermission($value);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        session::flash('success','role deleted sucessfully');
        return redirect()->back();
    }
}

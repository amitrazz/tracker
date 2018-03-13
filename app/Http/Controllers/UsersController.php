<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

Use App\user;
Use App\Role;
use App\profile;
use Auth;

class UsersController extends Controller
{
    function __construct(){
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_name'       =>  'required',
            'email'           =>  'required',
            'degination'      =>  'required',
            'is_active'       =>  'required',

        ]);
        $user = user::create([
            'user_name'         => $request->user_name,
            'email'             => $request->email,
            'password'          => bcrypt('password'),
            'degination'        => $request->degination,
            'email_password'    => bcrypt('email_password'),
            'is_active'         => $request->is_active


        ]); 
        $profile = profile::create([
            'user_id' => $user->id,
            'profile_pic'  => 'uploads/profile/1.jpg'
        ]);
        $user->attachRole(Role::Where('name','caller')->first());
        session::flash('success','User added succesfully');
        return redirect()->route('users');
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
        return view('admin.users.edit')->with('user',User::find($id));
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
        $this->validate($request , [
            'user_name' =>  'required'
        ]); 
        $user = User::find($id);
        $user->user_name     =   $request->user_name;
        $user->degination    =   $request->degination;
        $user->is_active     =   $request->is_active;

        $user->save();
        Session::flash('success','user info udated succesfully');
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        session::flash('success','user deleted sucscesfully');
        return redirect()->back();
    }
    public function getSignOut() {
		
        Auth::logout();
        return Redirect()->route('home');
        
    }
}

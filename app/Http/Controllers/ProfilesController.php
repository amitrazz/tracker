<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile.index')->with('user', Auth::User());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit()
    {
       return view('admin.profile.update')->with('user',Auth::User());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'user_name'       =>  'required',
            'email'      =>  'required|email'
        ]);
        $user = Auth::user();
        if($request->hasFile('profile_pic')){
         $profile_pic = $request->profile_pic;
         $profile_pic_new_name = time().$profile_pic->getClientOriginalName();
         $profile_pic->move('uploads/profile',$profile_pic_new_name);
 
         $user->profile->profile_pic  =   'uploads/profile'.$profile_pic_new_name;
         $user->profile->save(); 
        }
        if($request->has('password')){
            $user->password  =   bcrypt($request->password);
            $user->save();
        }
        if($request->has('email_password')){
            $user->password  =   bcrypt($request->password);
        }
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->degination = $request->degination;
        $user->profile->eduction = $request->eduction;
        $user->profile->location = $request->location;
        $user->profile->skills = $request->skills;
        $user->profile->facebook_url = $request->facebook_url;
        $user->profile->twitter_url = $request->twitter_url;
        $user->profile->linkedin_url = $request->linkedin_url;
        $user->profile->about = $request->about;

        $user->save();
        $user->profile->save();

        return redirect()->route('profile');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\response;

class responsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.responses.index')->with('responses',Response::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.responses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      =>  'required',
            'code'      =>  'required',
            'priority'  =>  'required'
        ]); 
        $response = Response::create([
            'name'      =>   $request->name,
            'code'      =>  ucfirst($request->code),
            'priority'  =>  $request->priority
        ]);
        Session::flash('success','Response Added Succesfully!');
        return redirect()->route('responses');
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
        $response   =   response::find($id);
        return view('admin.responses.edit')->with('response',$response);
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
        $this->validate($request,[
            'name'      =>  'required',
            'code'      =>  'required',
            'priority'  =>  'required'
        ]); 
        $response = response::find($id);
        $response->name = $request->name;
        $response->code = ucfirst($request->code);
        $response->priority = $request->priority;

        $response->save();
        Session::flash('success','Response updated succesfully!');
        return redirect()->route('responses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = response::find($id);
        $response->delete();
        session::flash('success','Response Deleted Sucessfully!');
        return redirect()->back();
    }
}

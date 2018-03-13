<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Company;
use App\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contacts.index')->with('contacts',Contact::all())->with('company',Company::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.contacts.create')->with('companies',Company::all());
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
            'name'          =>   'required',
            'designation'   =>   'required',
            'email1'        =>   'required',
            'phone1'        =>   'required',
            'company_id'    =>   'required'
        ]);
        $contact = contact::create([
            'name'          =>   $request->name,
            'designation'   =>   $request->designation,
            'email1'        =>   $request->email1,
            'email2'        =>   $request->email2,
            'phone1'        =>   $request->phone1,
            'phone2'        =>   $request->phone2,
            'company_id'    =>   $request->company_id
        ]);
        Session::flash('success','Contact Person added succesfully!');
        return redirect()->route('contacts');
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
        $contact = contact::find($id);
        return view('admin.contacts.edit')->with('contact',$contact)->with('companies', Company::all());
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
            'name'          =>   'required',
            'designation'   =>   'required',
            'email1'        =>   'required',
            'phone1'        =>   'required',
            'company_id'    =>   'required'
        ]);
        $contact    =   Contact::find($id);

        $contact->name        =   $request->name;   
        $contact->designation =   $request->designation;   
        $contact->email1      =   $request->email1;   
        $contact->email2      =   $request->email2;   
        $contact->phone1      =   $request->phone1;   
        $contact->phone2      =   $request->phone2;   
        $contact->company_id  =   $request->company_id;   

        $contact->save();
        Session::flash('success','Contact Person updated succesfully!');
        return redirect()->route('contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        Session::flash('success','Contact Person Deleted succesfully!');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\company;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('admin.companies.index')->with('companies',$companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
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
            'name'                  =>  'required'
        ]);
        $company = company::create([
            'name'                  => $request->name,
            'industry_sigment'      => $request->industry_sigment,
            'address1'              => $request->address1,
            'address2'              => $request->address2,
            'city'                  => $request->city,
            'state'                 => $request->state,
            'country'               => $request->country,
            'zipcode'               => $request->zipcode,
            'lead_source'           => $request->lead_source,
            'connection'            => $request->connection,
            'order_frequancy'       => $request->order_frequancy,
            'avg_order_value'       => $request->avg_order_value
        ]); 
        Session::flash('success','Company added succesfully!');
        return redirect()->route('companies');
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
        $company = Company::find($id);

        return view('admin.companies.edit')->with('company',$company);
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
            'name'  =>  'required'
        ]);
        $company = Company::find($id);
        $company->name                  =   $request->name;
        $company->industry_sigment      =   $request->industry_sigment;
        $company->address1              =   $request->address1;
        $company->address2              =   $request->address2;
        $company->city                  =   $request->city;
        $company->state                 =   $request->state;
        $company->country               =   $request->country;
        $company->zipcode               =   $request->zipcode;
        $company->lead_source           =   $request->lead_source;
        $company->connection            =   $request->connection;
        $company->order_frequancy       =   $request->order_frequancy;
        $company->avg_order_value       =   $request->avg_order_value;

        $company->save();

        Session::flash('success','Company info Updated succesfully!');
        return redirect()->route('companies');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        Session::flash('success','Company Deleted succesfully!');
        return redirect()->back();
    }
}

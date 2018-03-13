<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\user;
use App\process;
use App\company;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.process.index')->with('process',Process::all())->with('users',user::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::with(array('roles' => function($query) {
            $query->where('name', 'caller');
        }))->get();
       // $users = User::all();
       // $users = Role::where('name','caller')->first()->users()->get();
        return view('admin.process.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //csv file Upload 
        $upload = $request->file('upload-file');
        $filePath   = $upload->getRealPath();

        $file = fopen($filePath,'r');

        $header = fgetcsv($file);
        $escapedHeader = [];
        foreach($header as $key => $value){
            $l_header = strtolower($value);
           // $escapedItem = preg_replace('/[^a-z]/','',$l_header);
            array_push($escapedHeader,$l_header);
        }
        //looping through others columns
        $columns = [];
        while($columns = fgetcsv($file)){
            if($columns[0] == " "){
                continue;
            }
            $data = array_combine($escapedHeader, $columns);
        }
       

        $name               = $data['name'];
        $address1           = $data['address1'];
        $address2           = $data['address2'];
        $city               = $data['city'];
        $state              = $data['state'];
        $country            = $data['country'];
        $zipcode            = $data['zipcode'];
        $industry_sigment   = $data['industry_sigment'];


        $this->validate($request,[
            'user_id'       =>  'required',
            'priority'      =>  'required',
            'status'        =>  'required',
        ]);
        $process = company::create([
            'name'              =>  $name,
            'address1'          =>  $address1,
            'address2'          =>  $address2,
            'city'              =>  $city,
            'state'             =>  $state,
            'state'             =>  $state,
            'country'           =>  $country,
            'zipcode'           =>  $zipcode,
            'industry_sigment'  =>  $industry_sigment,
            'user_id'           =>   $request->user_id,
            'priority'          =>   $request->priority,
            'status'            =>   $request->status,
        ]);
        return redirect()->route('home');
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

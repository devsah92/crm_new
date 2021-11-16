<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use App\Models\role;

class testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->flash('first', 'firstpage'); // session variable to test first page/ for if else
        $sdata = role::all();
        $rdata = compact('sdata');
    
        return view('test') ->with($rdata);
        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo"create";
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
        echo "my name is dev";

        $result = 'devfsrf';

        return $result;
        // $user = new role;
        // $user->role = $request['name'];
        
        // $user->save();
    
        // return redirect('/test')->with('message', 'Role Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session()->flush();
        echo "my name is dev";
        //
        //  $data = role::where('id', $id)->get();
        //  $dataa = compact('data');
       // $var = $data->id;
      
        // return view('test', ['data'=>$var]) ;
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
        $user = role::find($id);
        $user->role = $request['name'];
        $user->save();
        
        return redirect('/test')->with('message', 'Role Updated!');
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
        $var = role::find($id);

        if (!is_null($var)) {
            $var->delete();
        }
      
       
        return redirect('/test');
    }
}

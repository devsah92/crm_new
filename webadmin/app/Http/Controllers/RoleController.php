<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sdata = role::all();
        $rdata = compact('sdata');
    
        return view('managerole') ->with($rdata);
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
        echo"You have reached create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            if ($request->action == 'edit') {
                $data = array(
                  //  'role'	=>	$request->first_name,
                   // 'last_name'		=>	$request->last_name,
                    'role'		=>	$request->role
                );
                DB::table('tbl_roles')
                    ->where('id', $request->id)
                    ->update($data);
            }
            if ($request->action == 'delete') {
                DB::table('tbl_roles')
                    ->where('id', $request->id)
                    ->delete();
            } else {
                $model = new role();
                $model->role = $request->post('name');
                $model->save();
            }
            return response()->json($request);
        }

        // $request->validate(
        //     [
        //         'name'=> 'required'
                
        //     ]
        // );
    
        // $user = new role;
        // $user->role = $request['name'];
        
        // $user->save();
    
        // return redirect('/role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = role::where('id', $id)->get();
        //  $dataa = compact('data');
         
      
        return view('role', ['data'=>$data]);
        
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
        echo "edit";
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
        $request->validate(
            [
                'name'=> 'required',
            ]
        );

        $user = role::find($id);
        $user->role = $request['name'];
        $user->save();
        return redirect('/role');
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
        $var = role::find($id);

        if (!is_null($var)) {
            $var->delete();
        }
      
        
        return redirect('/role');
        //
    }
}

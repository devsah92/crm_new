<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TableditController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('test')->get();
        return view('jqtable', compact('data'));
    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
            if ($request->action == 'edit') {
                $data = array(
                  //  'role'	=>	$request->first_name,
                   // 'last_name'		=>	$request->last_name,
                    'role'		=>	$request->role
                );
                DB::table('test')
                    ->where('id', $request->id)
                    ->update($data);
            }
            if ($request->action == 'delete') {
                DB::table('test')
                    ->where('id', $request->id)
                    ->delete();
            }
            return response()->json($request);
        }
    }
}

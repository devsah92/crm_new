<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use log;

class AjaxController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequest()
    {
        return view('ajaxRequest');
    }
     
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
          
        Log::info($input);

        echo"Record inserted successfully";
     
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
}

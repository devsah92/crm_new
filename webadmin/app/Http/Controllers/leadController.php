<?php

namespace App\Http\Controllers;

//use App\DataTables\soleDataTable;
use Illuminate\Http\Request;
use App\Models\lead;
use App\Models\role;
use DataTables;

class leadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = lead::latest()->get();
        $user = session()->get('user');
        // $role = session()->get('role');
       
        if ($request->ajax()) {
            $data = lead::latest()->where('reference', $user)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
   
                        // $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('leads', compact('books'));
        // return $dataTable->render('managerole');
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
        // Role::firstOrCreate(
        //     ['id' => '7'],
        //     [ 'role' => $request->role]
        // );
        $val   = $request->id;
        if ($val != null) {
            $var = lead::find($val);
            $var->name = $request->name;
            $var->mobile = $request->mob;
            $var->email = $request->email;
            $var->whatsapp = $request->watsapp;
            $var->city = $request->city;
            $var->state = $request->state;
            $var->address = $request->address;
            $var->pincode = $request->pincode;
            $var->requirement = $request->req;
            $var->description = $request->desc;
            $var->assign_to = $request->asign;
            $var->status1 = $request->status;
            $var->save();
            return response()->json(['success'=>'Lead updated successfully.']);
        } else {
            $var = new lead();

            $var->name = $request->name;
            $var->mobile = $request->mob;
            $var->email = $request->email;
            $var->whatsapp = $request->watsapp;
            $var->city = $request->city;
            $var->state = $request->state;
            $var->address = $request->address;
            $var->pincode = $request->pincode;
            $var->requirement = $request->req;
            $var->description = $request->desc;
            $var->reference = session('user');
          
            $var->save();
       
            return response()->json(['success'=>'Lead saved successfully.']);
        }
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
        $book = lead::find($id);
        return response()->json($book);
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
        lead::find($id)->delete();
     
        return response()->json(['success'=>'Lead deleted successfully.']);
    }
}

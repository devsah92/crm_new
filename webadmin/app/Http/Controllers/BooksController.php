<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\DataTables\soleDataTable;
use DataTables;

//use App\DataTables\roleDataTable;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(soleDataTable $dataTable, Request $request)
    {
        // $books = Role::latest()->get();
        
        if ($request->ajax()) {
            $data = Role::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
   
                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        // return view('managerole', compact('books'));
        return $dataTable->render('managerole');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $role = new Role();

        // $role-> $request->role;
        // $role->save();

        Role::updateOrCreate(
            ['role' => $request->role],
            [ 'role' => $request->role]
        );

        return response()->json(['success'=>'Role saved successfully.']);
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
            $var = Role::find($val);
            $var->role = $request->role;
            $var->save();
            return response()->json(['success'=>'Role updated successfully.']);
        } else {
            $vars = new Role();

            $vars->role = $request->role;
            $vars->save();
       
            return response()->json(['success'=>'Role saved successfully.']);
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
        $book = Role::find($id);
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
        Role::find($id)->delete();
     
        return response()->json(['success'=>'Role deleted successfully.']);
    }
}

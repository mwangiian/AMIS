<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use \Carbon\Carbon;
use App\Models\Departments;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ["Departments"=>Departments::all()];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Departments();

        
        $data->department_name = $request->input('department_name');
        $data->department_head = $request->input('department_head');
        $data->no_of_vaccancies = $request->input('no_of_vaccancies');
        $data->created_on =  Carbon::now()->toDateTimeString();
        $data->application_deadline = Carbon::now()->toDateTimeString();

        
        $data->save();

        return $data->department_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ["Department"=>Departments::findOrFail($id)];
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
        $department = Departments::find($id);
        $postData = $request->all();

        foreach($postData as $key=>$value) {
            $department->$key = $value;
        }

        $department->save();

        return $postData;

        
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

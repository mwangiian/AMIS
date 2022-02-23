<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Applicants;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ["applicants"=>Applicants::with('jobs.departments')->get()];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        
        $data = new Applicants();
        $files = array("CV","insurance_cover","referral_letter","application_letter");

        // First handle files

        // retrieve and fetch all PUT params
        $postData = $request->all();

        foreach($files as $file_attribute) {

            // if document is file initiate file upload
            if($request->hasFile($file_attribute)){
                $uploadedFile = $request->file($file_attribute);
                $filename = time().$uploadedFile->getClientOriginalName();

                Storage::disk('local')->put(
                    'files/'.$filename,
                    'Contents'
                );

                $data->$file_attribute = $filename;
             }
            //  if not file but from input store it
             else{
                $data->$file_attribute = $request->input($file_attribute);
             }
            
        }

        foreach($postData as $key=>$value) {
            // save all other attributes that aren't file inputs
            if (!in_array($key,$files)){
                $data->$key = $value;
            }
        }

        $data->save();

        return ["id"=>$data->id_number];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ["applicants"=>Applicants::with('jobs.departments')->where('id_number', $id)->get()];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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

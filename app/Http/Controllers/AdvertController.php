<?php

namespace App\Http\Controllers;

Use \Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\RequestAdvert;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /**
          * Lists all adverts of a department

         *@$id refers to unique identifier of a department 
         *
         * @return \Illuminate\Http\Response 
         */
        return ["adverts"=>RequestAdvert::with('jobs.departments')->get()];
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
         // load models
         $advert= new RequestAdvert();
         $data = new Jobs();
 
         // fill in attributes
         // jobs
         $data->description = $request->input('description');
         $data->title = $request->input('title');
         $data->start_date = $request->input('start_date');
         $data->end_date = $request->input('end_date');
         $data->application_deadline = $request->input('application_deadline');
         $data->department_id = $request->input('department_id');
         $data->created_on =  Carbon::now()->toDateTimeString();
         $data->save();
 
         // adverts
         $advert->no_of_vaccancies = $request->input('no_of_vaccancies');
         $advert->requested_by = $request->input('requested_by');
         $advert->request_date = $request->input('request_date');
         $advert->job_ref_number = $data->ref_number;
         $advert->save();
 
 
         return ["id"=>$data->ref_number,"advert_id"=>$advert->requestId];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         /**
        * Lists all adverts of a department

        *@$id refers to unique identifier of a department 
        *
        * @return \Illuminate\Http\Response
        
        */
       return ["adverts"=>RequestAdvert::with('jobs.departments')->where('advert_id', $id)->get()];
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
        // status checker
        $job_updated = False;
        $advert_updated = False;

        // load models
        $advert= RequestAdvert::find($id);
        $job = Jobs::find($advert->job_ref_number);

        // columns of relevant tables i.e jobs and advert
        $jobs_columns = array(
                            'ref_number',
                            'department_id',
                            'title',
                            'description',
                            'start_date',
                            'end_date',
                            'created_on',
                            'application_deadline'
        );

        $advert_columns = array(
                            'requestId',
                            'job_ref_number',
                            'no_of_vaccancies',
                            'requested_by',
                            'request_date'
        );

        // retrieve and fetch all PUT params
        $postData = $request->all();

        #loop through PUT params and update model
        foreach($postData as $key=>$value) {

            if (in_array($key,$jobs_columns)){

                // update model
                $job->$key = $value;

                // If job details was updated then change status to true
                if(!$job_updated){
                    $job_updated = True;
                }
            }

            elseif (in_array($key,$advert_columns)) {

                // update model
                $advert->$key = $value;

                // If advert details was updated then change status to true
                if(!$advert_updated){
                    $advert_updated = True;
                }
            }
        }

        if($job_updated){
            $job->save();
        }

        if($advert_updated){
            $advert->save();
        }


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

    // public function toArray()
    //     {
    //         $arr = parent::toArray();
    //         $reviewer_attributes = $this->getReviewerAttributesSomeHow();
    //         return array_merge($arr, $reviewer_attributes);
    //     }
}

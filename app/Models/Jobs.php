<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jobs';
    public $timestamps = false;
    protected $primaryKey = 'ref_number';

    public function advert(){
        return $this->belongsTo('App\Model\RequestAdvert', 'ref_number','job_ref_number');
    }

    public function applicants(){
        return $this->belongsTo('App\Model\Applicants', 'interested_job_number','job_ref_number');
    }

    public function departments(){
        return $this->hasOne('App\Models\Departments','department_id','department_id');
    }
}

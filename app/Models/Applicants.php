<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'applicants';
    protected $primaryKey = 'id_number';
    public $timestamps = false;

    public function jobs()
    {
        return $this->hasMany('App\Models\Jobs','ref_number','interested_job_number');
    }

    

}

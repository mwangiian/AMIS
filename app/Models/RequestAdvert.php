<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RequestAdvert extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'request_adverts';
    public $timestamps = false;
    protected $primaryKey = 'requestId';

    public function jobs()
    {
        return $this->hasMany('App\Models\Jobs','ref_number','job_ref_number');
    }
}

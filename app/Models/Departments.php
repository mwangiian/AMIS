<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table = 'departments';
    protected $primaryKey = 'department_id';

    public function jobs(){
        return $this->belongsTo('App\Model\Jobs','department_id','department_id');
    }
}

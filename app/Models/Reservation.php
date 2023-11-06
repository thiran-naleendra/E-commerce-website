<?php

namespace App\Models;

// warehouse table get data

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
   
    protected $table = 'reservation';
    public $timestamps = false;

    public $fillable = ['id','table_id','date','time','people','name','email','tp_no','note','status'];

    
   
}

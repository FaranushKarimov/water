<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservoirs extends Model
{
    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'reservoirs';
}

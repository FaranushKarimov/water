<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Irrigation extends Model
{
    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'irrigations';
}

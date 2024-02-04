<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GsmCounter extends Model
{
    // protected $guarded = array('id','updated_at','created_at');
    protected $guarded = array('');
    // protected $table = 'avg_level';
    protected $table = 'level_lk';
    // protected $connection = 'sqlsrv';

    public $timestamps = false;

}

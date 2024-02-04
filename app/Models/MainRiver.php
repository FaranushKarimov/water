<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainRiver extends Model
{
    use HasFactory;

    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'main_rivers';
}

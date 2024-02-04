<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\WaterBasinZone;
use App\Oblast;

class Region extends Model
{
    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'regions';

    public function basin() {
	  return $this->belongsTo(WaterBasinZone::class, $foreign_key = 'basin_id', $local_key = 'id');
	}

	public function oblast() {
	  return $this->belongsTo(Oblast::class, $foreign_key = 'oblast_id', $local_key = 'id');
	}
}

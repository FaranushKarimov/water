<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\WaterBasinZone;

class Oblast extends Model
{
    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'oblasts';

    public function basin() {
	  return $this->belongsTo(WaterBasinZone::class, $foreign_key = 'basin_id', $local_key = 'id');
	}
}

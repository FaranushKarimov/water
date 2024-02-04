<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Wua;
use App\Region;

class Qwua extends Model
{
    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'qwuas';

    public function wua() {
	  return $this->belongsTo(Wua::class, $foreign_key = 'wua_id', $local_key = 'id');
	}

	public function region() {
	  return $this->belongsTo(Region::class, $foreign_key = 'region_id', $local_key = 'id');
	}
}

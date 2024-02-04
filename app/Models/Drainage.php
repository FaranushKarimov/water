<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\MainRiver;

class Drainage extends Model
{
    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'drainages';

    public function river() {
	  return $this->belongsTo(MainRiver::class, $foreign_key = 'river_id', $local_key = 'id');
	}
}

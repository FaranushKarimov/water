<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Wua;
use App\Hydropost;

class Decada extends Model
{
	protected $guarded = array('id','updated_at','created_at');
    // protected $guarded = array('');
    protected $table = 'decadas';
    // protected $connection = 'sqlsrv';

    // public $timestamps = false;
    public function wua() {
	  return $this->belongsTo(Wua::class, $foreign_key = 'wua_id', $local_key = 'id');
	}

	public function hydropost() {
	  return $this->belongsTo(Hydropost::class, $foreign_key = 'hydropost_id', $local_key = 'id');
	}
}

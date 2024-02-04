<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Hydropost;

class Qms extends Model
{
    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'qmss';

    public function hydropost() {
	  return $this->belongsTo(Hydropost::class, $foreign_key = 'hydropost_id', $local_key = 'id');
	}
}

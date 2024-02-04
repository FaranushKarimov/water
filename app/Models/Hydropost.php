<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Wua;
use App\Canal;

class Hydropost extends Model
{
    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'hydroposts';

    public function canal() {
        return $this->belongsTo(Canal::class, $foreign_key = 'canal_id', $local_key = 'id');
    }

    public function wua() {
        return $this->belongsTo(Wua::class, $foreign_key = 'wua_id', $local_key = 'id');
    }
}

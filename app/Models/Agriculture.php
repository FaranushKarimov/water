<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agriculture extends Model
{
    //
    public $timestamps=false;

    public function wuas() {
        return $this->belongsTo(Wua::class);
    }
}

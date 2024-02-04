<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiverNetwork extends Model
{
    public function canals() {
        return $this->hasMany(Canal::class);
    }
    public function sprinklers() {
        return $this->hasMany(Sprinkler::class);
    }
    //
    public function catchmentArea() {
        return $this->belongsTo(CatchmentArea::class);
    }
}

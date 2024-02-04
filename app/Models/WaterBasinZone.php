<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterBasinZone extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'updated_at', 'created_at'];
    protected $table = 'water_basin_zones';

    // Здесь могут быть отношения, если вы хотите их добавить
    // public function canals()
    // {
    //     return $this->hasMany(Canal::class);
    // }

    // public function catchmentAreas()
    // {
    //     return $this->hasMany(CatchmentArea::class);
    // }

    // public function mainRivers()
    // {
    //     return $this->hasMany(MainRiver::class);
    // }
}

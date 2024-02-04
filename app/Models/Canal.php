<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Wua;
use App\Models\WaterBasinZone;
use App\Models\MainRiver;

class Canal extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'updated_at', 'created_at'];
    protected $table = 'canals';

    /*public function waterLevels()
    {
        return $this->hasMany(WaterLevel::class);
    }

    public function waterBasinZone()
    {
        return $this->belongsTo(WaterBasinZone::class);
    }

    public function wua()
    {
        return $this->belongsTo(Wua::class);
    }

    public function riverNetwork()
    {
        return $this->belongsTo(RiverNetwork::class);
    }*/

    // public function basin()
    // {
    //     return $this->belongsTo(WaterBasinZone::class, 'basin_id', 'id');
    // }

    // public function river()
    // {
    //     return $this->belongsTo(MainRiver::class, 'river_id', 'id');
    // }
}

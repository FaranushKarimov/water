<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Hydropost;

class Qcoordinate extends Model
{
    protected $guarded = array('id','updated_at','created_at');
    protected $table = 'qcordinates';

    public function hydropost() {
	  return $this->belongsTo(Hydropost::class, $foreign_key = 'hydropost_id', $local_key = 'id');
	}

    static function qValue($height, $hydropost_id)
    {
        if(is_null($height) || is_null($hydropost_id)) return NULL;

    	return SELF::where('hydropost_id','=',$hydropost_id)->where('height','=',$height)->value('flow');
    }

    static function wValue($qms)
    {
    	return $qms ? floatval(number_format($qms*86.4, 2, ".", ".")) : NULL;
    }

    static function avgQ($h1,$h2,$h3,$id){
        $arr_levels = array($h1,$h2,$h3);
        $count_levels = count(array_filter($arr_levels));
        $arr_q = array(SELF::qValue($h1, $id),SELF::qValue($h2, $id),SELF::qValue($h3, $id));
        $count_q = count(array_filter($arr_q));

        $avg = NULL;

        if($count_levels && $count_q) {
            $avg = ( $arr_q[0]?:0 + $arr_q[1]?:0 + $arr_q[2]?:0 )/$count_levels;
        }

        return $avg;
    }
}

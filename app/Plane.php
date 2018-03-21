<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Model;

class Plane extends Model
{
    /**
     *
     */
    public static function getActive() {
       $activePlanes =  Plane::where('active', 1)->get();
       return $activePlanes;
    }

    /**
     * @param $query
     */
    public function scopeActive($query) {
        return $query->where('active', 1);
    }
}

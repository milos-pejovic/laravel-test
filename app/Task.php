<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * This is a regular static method
     * @return mixed
     */
//    public static function incomplete() {
//        return Task::where('completed', 0)->get();
//        return static::where('completed', 0)->get();
//    }

    public function scopeIncomplete($query) {
        return $query->where('completed', 0);
    }

}

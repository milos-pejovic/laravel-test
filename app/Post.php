<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Model;

class Post extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments() {
//        return $this->hasMany('App\Comment');
        return $this->hasMany(Comment::class);
    }

//    protected $fillable = ['title', 'body'];
//    protected $guarded = ['user_id'];
}

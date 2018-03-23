<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'body'];

    /**
     * ======================================================================================================
     *  post
     * ======================================================================================================
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post() {
        return $this->belongsTo(Post::class);
    }

    /**
     * ======================================================================================================
     *  user
     * ======================================================================================================
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}

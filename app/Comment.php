<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Model;

class Comment extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post() {
        return $this->belongsTo(Post::class);
    }
}

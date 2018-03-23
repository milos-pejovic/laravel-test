<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Model;

class Post extends Model
{
        protected $fillable = ['title', 'body', 'user_id'];
    //    protected $guarded = ['user_id'];

    /**
     * ======================================================================================================
     *  comments
     * ======================================================================================================
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
//        return $this->hasMany('App\Comment');
        return $this->hasMany(Comment::class);
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

    /**
     * ======================================================================================================
     *  addComment
     * ======================================================================================================
     * @param $body
     */
    public function addComment($body)
    {
        // This will automatically set the "post id" for the new comment.
        $this->comments()->create(compact('body'));

//        Comment::create([
//            'body' => $body,
//            'post_id' => $this->id
//        ]);
    }
}
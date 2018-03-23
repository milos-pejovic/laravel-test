<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * ======================================================================================================
     *  The attributes that are mass assignable.
     * ======================================================================================================
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * ======================================================================================================
     *  The attributes that should be hidden for arrays.
     * ======================================================================================================
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * ======================================================================================================
     *  posts
     * ======================================================================================================
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts() {
        return $this->hasMany(Post::class);
    }

    /**
     * ======================================================================================================
     *  comments
     * ======================================================================================================
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    /**
     * ======================================================================================================
     *  publish
     * ======================================================================================================
     * @param Post $post
     */
    public function publish(Post $post) {

        // If we have an existing instance of a Post, we can just save it.
        $this->posts()->save($post);

        // "Create" allows us to make a new instance and set values
//        $this->posts()->create([
//
//        ]);
    }
}

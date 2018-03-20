<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * ======================================================================================================
     *  index
     * ======================================================================================================
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('posts.index');
    }

    /**
     * ======================================================================================================
     *  index
     * ======================================================================================================
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post) {
//        return view('posts.show', compact('post'));
        return view('posts.show');
    }

    /**
     * ======================================================================================================
     *  create
     * ======================================================================================================
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        return view('posts.create');
    }

    /**
     *
     */
    public function store() {
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        // Without the "use App\Post" we do this
//        $post = new \App\Post();

        //============================================================

        // One way to set data

//        $post = new Post();
//
//        $post->title = request('title');
//        $post->body = request('body');
//        $post->save();

        //============================================================

        /*
            Never do teh following!
            It will use ALL the data

            Post::create(request()->all());
        */

        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/');

        //============================================================
        // request

//        dd(request(['title', 'body']));
//        dd(request()->all());
//        dd(request()->title);

    }
}

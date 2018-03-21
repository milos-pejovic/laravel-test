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
//        $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
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
        return view('posts.show', compact('post'));
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
            Never do the following!
            It will use ALL the data

            Post::create(request()->all());
        */

//        Post::create([
//            'title' => request('title'),
//            'body' => request('body')
//        ]);

        $this->validate(request(), [
//            'title' => 'reqired|min:2|max:10',
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create(request(['title', 'body']));
        return redirect('/posts');

        //============================================================
        // request

//        dd(request()->all());
//        dd(request()->title);
//        dd(request(['title', 'body']));

    }
}

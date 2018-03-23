<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    /**
     * PostsController constructor.
     */
    public function __construct() {
        // This restrict all the methods in this controller to logged in users.
//        $this->middleware('auth');

        // This restrict index method in this controller to logged in users
//        $this->middleware('auth', ['only' => 'index']);

        // This restrict all except index methods in this controller to logged in users
//        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('auth')->except(['index', 'show']);
    }

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
     *  show
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



        $this->validate(request(), [
//            'title' => 'required|min:2|max:10',
            'title' => 'required',
            'body' => 'required'
        ]);

//        Post::create([
//            'title' => request('title'),
//            'body' => request('body'),
//            'user_id' => auth()->id()
//        ]);


        //============================================================
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );
        //============================================================


//        Post::create(request(['title', 'body', 'user_id']));
        return redirect('/posts');

        //============================================================
        // request

//        dd(request()->all());
//        dd(request()->title);
//        dd(request(['title', 'body']));

    }
}

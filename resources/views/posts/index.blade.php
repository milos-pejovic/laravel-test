@extends('layouts.master')

@section('content')

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h1><a href="/posts/create">Make new post</a></h1>

                @foreach($posts as $post)
                    @include('posts.post')
                @endforeach

            </div><!-- /.blog-main -->

        </div><!-- /.row -->

    </main><!-- /.container -->

@endsection
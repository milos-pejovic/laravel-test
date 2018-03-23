@extends('layouts.master')

@section('content')

    <h1>{{$author->name}} {{$author->surname}}</h1>

    @foreach($author->books as $book)
        <h2>{{$book->title}}</h2>
        <p>{{$book->body}}</p>
    @endforeach

    <h2>Add book</h2>

    <form method="POST" action="/authors/{author}/book">
        {{csrf_field()}}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" class="form-control" id="body" name="body" value="{{old('title')}}">
        </div>

        <div class="form-group d-none">
            <label for="author_id">Author id</label>
            <input type="text" class="form-control" id="author_id" name="author_id" value="{{ $author->id }}">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>

    @include('layouts.errors')

@endsection
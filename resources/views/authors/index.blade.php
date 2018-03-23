@extends('layouts.master')

@section('content')
    <h1>Authors</h1>

    <p><a href="/authors/create">New author</a></p>

    <ul>
        @foreach($authors as $author)
            <li><a href="/authors/{{$author->id}}">{{$author->name}} {{$author->surname}}</a></li>
        @endforeach
    </ul>
@endsection
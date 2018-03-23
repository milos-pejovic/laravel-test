@extends('layouts.master')

@section('content')

    <h1><a href="/planes/create">Make a new plane</a></h1>

    @foreach($planes as $plane)
        <div class="list-group-item">
            <h1><a href="/planes/{{$plane->id}}">{{$plane->plane_name}}</a></h1>
            <p>{{$plane->body}}</p>
            <p>{{$plane->created_at->toFormattedDateString()}}</p>
        </div>
    @endforeach

@endsection
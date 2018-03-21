@extends('layouts.master')

@section('content')

    <h1>Planes</h1>

    @foreach($allPlanes as $plane)

        <li><a href="/planes/{{$plane->id}}">{{$plane->body}}</a></li>

    @endforeach

@endsection
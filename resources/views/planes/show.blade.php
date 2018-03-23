@extends('layouts.master')

@section('content')

    <h1>{{$plane->plane_name}}</h1>
    <p>{{$plane->body}}</p>
    <p>{{$plane->created_at->toFormattedDateString()}}</p>

    @foreach($plane->dests as $dest)
        <li>{{$dest->dest}}</li>
    @endforeach

    <form method="POST" action="/planes/{{$plane->id}}/dest">

        {{csrf_field()}}

        <div class="form-group">
            <label for="dest">Destination</label>
            <input type="text" id="dest" name="dest" class="form-control" />
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>

    <br />
    <p><a href="/planes">Back</a></p>

@endsection
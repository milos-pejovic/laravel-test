@extends('layouts.master')

@section('content')

    <div class="col-md-4 blog-main">

        <form action="/planes" method="POST">

            {{csrf_field()}}

            <div class="form-group">
                <label for="plane-name">Name</label>
                <input type="text" class="form-control" id="plane_name" name="plane_name" />
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" class="form-control" id="body" name="body" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection
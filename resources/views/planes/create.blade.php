@extends('layouts.master')

@section('content')

    <div class="col-md-4 blog-main">

        <form action="/planes" method="POST">

            {{csrf_field()}}

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body"></textarea>
            </div>

            <div class="form-group">
                <label for="active">Active</label>
                <input type="checkbox" class="form-control" id="active" name="active" />
            </div>

            <div class="form-control">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

           <div class="form-control">
               @include('layouts.errors')
           </div>

        </form>

    </div>



@endsection
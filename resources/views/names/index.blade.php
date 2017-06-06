@extends ('layout')

@section ('content')

<div class="col-md-4 col-md-offset-4 jumbotron">
    <h3>SPS Names List<h3>
    <hr>
        <ul>
            @foreach ($names as $name)
        <li>
            <a href="/names/{{ $name->id }}">{{ $name->title }}</a>
        </li>
            @endforeach
        </ul>
        <hr>
        <a href="/names/create" class="btn btn-primary">Add Name</a>
            
            </div>
            
            @endsection

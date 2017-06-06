@extends ('layout')

@section ('content')
<h3>SPS Names List<h3>
        <ul>
            @foreach ($names as $name)
        <li>
            <a href="/names/{{ $name->id }}">{{ $name->title }}</a>
        </li>
            @endforeach
        </ul>
        <a href="/names/create" class="btn btn-primary">Add Name</a>
            @endsection
@extends('layouts.main-layout')
@section('content')
    <h1>Main</h1>
    <a href="{{route("create")}}"> Create new Movie </a>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{route("show", $movie -> id)}}">    
                    {{$movie -> title}} 
                    - {{$movie -> release_date}}
                    - <a href="{{route("edit", $movie -> id)}}"> EDIT </a>
                    - <a href="{{route('delete', $movie -> id)}}">Delete</a>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
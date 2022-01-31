@extends('layouts.main-layout')
@section('content')
    <h1> Update new Movie </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route("store")}}" method="POST">
        @method("POST")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{$movie -> title}}">
        
        <label for="subtitle">Subitle:</label>
        <input type="text" name="subtitle" value="{{$movie -> subtitle}}">

        <label for="release_date">Release date:</label>
        <input type="date" name="release_date" value="{{$movie -> release_date}}"><br>
        <input type="submit" value="UPDATE">
    </form>
@endsection
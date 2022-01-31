@extends('layouts.main-layout')
@section('content')

    <h1>Show</h1>
    <h3>{{$movie -> title}}</h3>
    <h3>{{$movie -> subtitle}}</h3>
    <h3>{{$movie -> release_date}}</h3>

@endsection
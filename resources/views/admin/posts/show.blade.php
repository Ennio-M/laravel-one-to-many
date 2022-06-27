@extends('layouts.admin');

@section('content')
    <h1>{{$post->title}}</h1>
    <small>{{$post->created_at}}</small>
    <p>{{{$post->content}}}</p>
    <h5>Pubblicato: {{$post->published}}</h5>
@endsection
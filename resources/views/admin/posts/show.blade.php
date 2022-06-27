@extends('layouts.admin');

@section('content')
    <h1>{{$post->title}}</h1>
    @if ($post->category)
        <h5>{{$post->category->name}}</h5>
    @endif
    <small>{{$post->created_at}}</small>
    <p>{{{$post->content}}}</p>
    <h5>Pubblicato: {{$post->published}}</h5>
@endsection
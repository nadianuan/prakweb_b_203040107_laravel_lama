@extends('layouts.main')

@section('container')
    <h1>{{ $post->tittle }}</h1>
        
    <p>By. Nadia Nur Annisa in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
    {!! $post->body !!}


    <a href="/posts">Back to Posts</a>
@endsection
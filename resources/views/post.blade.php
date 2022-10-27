@extends('layouts.main')

@section('container')
    <h1>{{ $post->tittle }}</h1>
        
        
    {!! $post->body !!}


    <a href="/posts">Back to Posts</a>
@endsection
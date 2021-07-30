@extends('layouts.main')

@section('container')

    <h1>{{ $post->title }}</h1>
    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
    {!! $post->body !!}

<a href="/post" class="text-decoration-none">Back to posts</a>

@endsection
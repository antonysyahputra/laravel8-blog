@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

@foreach ($posts as $post)
<article class="mb-3 border-bottom">
    <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
    <p>By. <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p>{{ $post->exerpt }}</p>  
    
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
</article>    
@endforeach
@endsection

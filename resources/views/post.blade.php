@extends('layouts.main')

@section('container')
    <h1 class="mb-3">{{ $post->title }}</h1>
    <p class="mb-2">by {{ $post->author }} in 
        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>
    {!! $post->body !!}
<br>
    <a href="/posts">Back to posts</a>
@endsection
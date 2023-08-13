@extends('layouts.main')

@section('container')
    <h1 class="mb-3">{{ $post->title }}</h1>
    <p class="mb-2">by <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in 
        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
    </p>
    {!! $post->body !!}
<br>
    <a href="/posts" class="d-block mt-3 text-decoration-none">Back to posts</a>
@endsection
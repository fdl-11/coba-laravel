@extends('layouts.main')

@section('container')
    <h1 class="mb-2">{{ $post->title }}</h1>
    <h5 class="mb-4">by : {{ $post->author }}</h5>
    {!! $post->body !!}
<br>
    <a href="/posts">Back to posts</a>
@endsection
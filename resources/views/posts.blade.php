@extends('layouts.main')

@section('container')
    
    <h1 class="mb-4">Halaman Blog Posts</h1>

    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h6>by {{ $post->author }}</h6>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection
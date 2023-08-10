@extends('layouts.main')

@section('container')
    
    <h1 class="mb-4">Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h6>by {{ $post->author }}</h6>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
    <h6><a href="../categories">See all categories</a></h6>
@endsection
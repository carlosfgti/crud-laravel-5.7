@extends('layouts.app')

@section('content')

    <h1>Posts</h1>

    @foreach ($posts as $post)
    <article class="post">
        <a href="{{ route('posts.show', $post->id) }}">
            @if ($post->image)
                <img src="{{ url("storage/posts/{$post->image}") }}" alt="{{ $post->title }}">
            @else
                <img src="{{ url('imgs/default.png') }}" alt="{{ $post->title }}">
            @endif
            <h1>{{ $post->title }}</h1>
        </a>
    </article>
    @endforeach

@endsection
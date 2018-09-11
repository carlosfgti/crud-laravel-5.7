@extends('layouts.app')

@section('content')

    <h1>Posts</h1>

    @foreach($posts as $post)
    <article class="post">
        <a href="">
            <h1>{{ $post->title }}</h1>
        </a>
    </article>
    @endforeach

@endsection
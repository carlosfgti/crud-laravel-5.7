@extends('layouts.app')

@section('title', 'Listagem dos posts')

@section('content')

<h1>
    Posts
    <a href="{{ route('posts.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-square"></i>
    </a>
</h1>

@include('includes.alerts')

<ul class="media-list">
    @forelse($posts as $post)
    <li class="media">
        <div class="pull-left">
            @php
                $pathImage = url('imgs/posts/default.png');

                if ($post->image)
                    $pathImage = url("storage/posts/{$post->image}");
            @endphp
            <img src="{{ $pathImage }}" alt="{{ $post->title }}" class="img-circle" style="max-width: 60px; margin: 10px;">
        </div>
        <div class="media-body">
            <span class="text-muted pull-right">
                <small class="text-muted">{{ $post->created_at->format('d/m/Y') }}</small>
            </span>
            <strong class="text-success">{{ '@' . $post->user->name }}</strong>
            <p>
                {{ $post->title }}
                <br>
                <a href="{{ route('posts.show', $post->id) }}">Detalhes</a> |
                <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
            </p>
        </div>
    </li>
    <hr>
    @empty
    <li class="media">
        <p>Nenhum post cadastrado!</p>
    </li>
    @endforelse

    {!! $posts->links() !!}
</ul>

@endsection
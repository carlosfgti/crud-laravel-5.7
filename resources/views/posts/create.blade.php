@extends('layouts.app')

@section('title', 'Cadastrar Novo Post')

@section('content')

<h1>Cadastrar Post</h1>

<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @include('posts._partials.form')
</form>

@endsection
@extends('layouts.app')

@section('content')

<h1>Cadastrar Post</h1>

@include('includes.alerts')

<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @include('posts._partials.form')
</form>

@endsection
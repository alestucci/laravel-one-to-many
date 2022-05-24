@extends('layouts.app')

@section('title', $post->title)

@section('content')

<div class="container">
    <h1 class="text-center">{{ $post->title }}</h1>
    <p class="mt-3">{{ $post->content }}</p>
</div>
    
@endsection
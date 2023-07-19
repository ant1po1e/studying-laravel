@extends('layouts.main')


@section('container')

<article class="mb-3 border-bottom border-3 pb-3">
    <h1>{{ $post->title }}</h1>
    <h3 class="pb-3">By: <a class="text-decoration-none" href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a></h3>
    <div class="pb-3">{!! $post->body !!}</div>
    <a href="/blog" class="text-decoration-none fw-bold d-block">Back to main</a>
</article>

@endsection
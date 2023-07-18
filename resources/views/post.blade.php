@extends('layouts.main')


@section('container')

<article class="mb-5">
    <h1>{{ $post->title }}</h1>
    <h3>By: {{ $post->author }}</h3>
    {!! $post->body !!} 

</article>

<a href="/blog">Back to main</a>

@endsection
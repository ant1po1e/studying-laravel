@extends('layouts.main')



@section('container')

@foreach ($posts as $post)
<article class="mb-3 border-bottom border-3 pb-3">
    <h1><a class="text-decoration-none text-black" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
    <h3 class="pb-3">By: <a class="text-decoration-none" href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a></h3>
    <p>{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none fw-bold">Read more...</a>
</article>
@endforeach

@endsection



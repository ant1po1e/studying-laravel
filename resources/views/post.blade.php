@extends('layouts.main')


@section('container')

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <h5>By: <a class="text-decoration-none" href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a></h5>
            <img src="https://source.unsplash.com/1200x400?programming" class="card-img-top my-3" alt="...">
            <div class="pb-3">{!! $post->body !!}</div>
            <a href="/blog" class="text-decoration-none fw-bold d-block">Back to main</a>
        </div>
    </div>
</div>

@endsection
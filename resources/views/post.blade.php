@extends('layouts.main')

@section('container')
<div class="container pb-5">
    <div class="row my-3 justify-content-center">
        <div class="col">
            <h1 class="text-center">{{ $post->title }}</h1>
            <h5 class="text-center">By: <a class="text-decoration-none"
                    href="/authors/{{ $post->user->id }}">{{ $post->user->username }}</a></h5>
            @if($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top my-3" alt="...">
            </div>
            @else
            <div style="max-height: 350px; overflow: hidden;">
                <img src="https://source.unsplash.com/1200x400?programming" class="card-img-top my-3" alt="...">
            </div>
            @endif
            <div class="pb-3 mt-4">{!! $post->body !!}</div>

            <a href="/posts">Back to Main</a>
        </div>
    </div>
</div>
@endsection

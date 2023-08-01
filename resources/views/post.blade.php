@extends('layouts.main')

@section('container')
<div class="container pb-5">
    <div class="row my-3 justify-content-center">
        <div class="col">
            <h1 class="text-center">{{ $post->title }}</h1>
            @if($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top my-3" alt="...">
            </div>
            @else
            <div style="max-height: 350px; overflow: hidden;">
                <img src="https://source.unsplash.com/1200x400?programming" class="card-img-top my-3" alt="...">
            </div>
            @endif
            <div class="pb-3">{!! $post->body !!}</div>

        </div>
    </div>
</div>
@endsection
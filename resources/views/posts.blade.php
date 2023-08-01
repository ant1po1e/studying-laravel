@extends('layouts.main')



@section('container')

  <h1 class="mb-3 text-center">{{ $title }}</h1>
  <div class="row mb-3 justify-content-center">
    <div class="col-md-6">
      <form action="/posts">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-dark" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>


@if($posts->count())

<div class="card mb-3">
            @if($posts[0]->image)
            <div style="max-height: 350px; overflow: hidden;">
              <img src="{{ asset('storage/'. $posts[0]->image) }}" class="card-img-top" alt="...">
            </div>
            @else
            <div style="max-height: 350px; overflow: hidden;">
              <img src="https://source.unsplash.com/1200x400?programming" class="card-img-top" alt="...">
            </div>
            @endif
            <div class="card-body text-center">
              <h3 class="card-title"><a class="text-decoration-none text-black" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
              <h5>By: <a class="text-decoration-none" href="/authors/{{ $posts[0]->user->id }}">{{ $posts[0]->user->name }}</a></h5>
              <p class="card-text pb-2"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
              <p class="card-text">{{ $posts[0]->excerpt }}</p>
              <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none fw-bold btn btn-dark">Read more</a>
            </div>
          </div>
          
          <div class="container">
    <div class="row">

        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            @if($post->image)
            <div style="max-height: 150px ; overflow: hidden;">
            <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top" alt="...">
            </div>  
            @else
            <div style="max-height: 150px; overflow: hidden;">
              <img src="https://source.unsplash.com/1920x1080?programming" class="card-img-top" alt="...">
            </div>
            @endif
            <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <h5>By: <a class="text-decoration-none" href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a></h5>
                  <p class="card-text pb-2"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/post/{{ $post->slug }}" class="btn btn-dark">Read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>  
</div>

@else
<p class="text-center fs-3">No post found :"(</p>
@endif

@endsection



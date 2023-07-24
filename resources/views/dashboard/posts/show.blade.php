@extends('dashboard.layouts.main')

@section('container')
<div class="container pb-5">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1>{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to Dashboard</a>
            <a href="#" class="btn btn-warning text-white"><i class="bi bi-pencil-square"></i> Edit</a>
            <a href="#" class="btn btn-danger"><i class="bi bi-x-circle"></i> Delete</a>

            <img src="https://source.unsplash.com/1200x400?programming" class="card-img-top my-3" alt="...">
            <div class="pb-3">{!! $post->body !!}</div>
        </div>
    </div>
</div>
@endsection
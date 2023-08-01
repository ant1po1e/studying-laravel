@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="table-responsive small col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><i class="bi bi-plus-lg"></i> Create new post</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-primary fs-6 text"><i
                            class="bi bi-eye"></i></a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning fs-6 text"><i
                            class="bi bi-pencil-square"></i></a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger fs-6 text border-0"
                            onclick="return confirm ('Are you sure want to delete this post?')"><i
                                class="bi bi-x-circle"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection

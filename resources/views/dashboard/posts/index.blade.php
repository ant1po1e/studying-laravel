@extends('dashboard.layouts.main')

@section('container')
<div
class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">My Posts</h1>
</div>


<div class="table-responsive small col-lg-8">
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
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-primary fs-6 text"><i class="bi bi-eye"></i></a>
            <a href="#" class="badge bg-warning fs-6 text"><i class="bi bi-pencil-square"></i></a>
            <a href="#" class="badge bg-danger fs-6 text"><i class="bi bi-x-circle"></i></a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection
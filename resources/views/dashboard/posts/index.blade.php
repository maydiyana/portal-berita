@extends('dashboard.layout.main')

@section('container')
<h2>My Post</h2>
<div class="btn-toolbar mb-2 mb-md-0">
</div>
</div>
@if (session()->has('succes'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('succes') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

<div class="table-responsive col-lg-8">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-2">Create New Post</a>
<table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Catagory</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->catagory->name }}</td>
        <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure for delete this post?') "><span class="bi bi-x-octagon"></span> </button>
            </form>
        </td>
      </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@endsection
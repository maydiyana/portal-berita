@extends('dashboard.layout.main')

@section('container')
<h2>My Post</h2>
<div class="btn-toolbar mb-2 mb-md-0">
</div>
</div>
@if (session()->has('oke'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('oke') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

<div class="table-responsive col-lg-8">
  <a href="/newtodo" class="btn btn-primary mb-2">Create New List</a>
<table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody> 
        @forelse ($data as $post)
            <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>
            <form method="POST" action="/todo" class="d-inline">
            @method('delete')
            @csrf
              <button type="submit">delete</button>
            </form>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
@extends('dashboard.layout.main')

@section('container')
<div class="col-lg-8">
    <form action="/todo" method="POST">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
          @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
</div>

@endsection
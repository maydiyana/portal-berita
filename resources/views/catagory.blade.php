@extends('dashboard.layout.main')

@section('container')
    <div class="col-lg-8">
        <form action="/catagory" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Catagory Name</label>
            <input type="text" class="form-control @error('catagory') is-invalid @enderror" name="name" id="name">
            @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('catagory') is-invalid @enderror" name="slug" id="slug">
            @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          </div>
          <button type="submit" class="btn btn-primary">Create Catagory</button>
        </form>
    </div>
@endsection

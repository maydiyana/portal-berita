@extends('dashboard.layout.main')

@section('container')
<div class="col-lg-8">
    <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
          @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
          <div class="mb-3">
            <label for="catagory_id" class="form-label">Catagory</label>
            <select class="form-select" name="catagory_id" id="catagory_id">
              @foreach ($catagories as $catagory)
              <option value="{{ $catagory->id }}">{{ $catagory->name }}</option>
              @endforeach
            </select>           
          </div>
         <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
           </div>
           <div class="mb-3">
            <label for="image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="image" name="image" @error('image') is-invalid @enderror>
            @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" id="body">
            <trix-editor input="body"></trix-editor>
          </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
</div>
<script>
  const title = document.querySelector("#title");
  const slug = document.querySelector("#slug");

  title.addEventListener("keyup", function() {
      let preslug = title.value;
      preslug = preslug.replace(/ /g,"-");
      slug.value = preslug.toLowerCase();
  });
</script>

@endsection
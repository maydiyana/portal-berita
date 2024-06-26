@extends('layout.mainn')

@section('container')

<div class="body">

<div class="row " >
  <div class="row-md-6" >
  <form action="/posts" method="GET">
    @if (request('catagory'))
        <input type="hidden" name="catagory" value="{{ request('catagory') }}">
    @endif
    @if (request('authors'))
    <input type="hidden" name="authors" value="{{ request('authors') }}">
@endif
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
      <button class="btn btn-outline-secondary" type="submit">Serach</button>
    </div>
  </form>
  </div>  
</div>

@if ($posts->count())
    <div class="card mb-3">
     
@if ($posts[0]->image)
<img src="{{ asset('storage/' . $posts[0]->image) }}" alt="" class="img-fluid">

@else
<img src="https://picsum.photos/400/400?grayscale" alt="">
@endif
    <div class="card-body text-center">
        <h2 class="card-title">
        <a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
        </h2>
        
        <small class="text-body-secondary">
            by: <a href="/posts?authors={{ $posts[0]->user->username }}"class="text-decoration-none">{{ $posts[0]->user->name }}</a> 
            in 
            <a href="/posts?catagory={{ $posts[0]->catagory->slug }}"class="text-decoration-none">{{ $posts[0]->catagory->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}
        </small>

        <h6 class="card-text mt-3">{{ $posts[0]->exc }}</h6> 
        <a href="/posts/{{ $posts[0]->slug }}"class="btn" style="background-color:#a7a9be">Read More</a>
      </div>
  </div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                              
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">

                @else
                <img src="https://picsum.photos/seed/picsum/400/200" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                
                  <small>
                  <p class="card-text">by: <a href="/posts?authors={{ $post->user->username }}"class="text-decoration-none">{{ $post->user->name }}</a> 
                    in 
                    <a href="/posts?catagory={{ $post->catagory->slug }}"class="text-decoration-none">{{ $post->catagory->name }}</a>
                {{ $post->created_at->diffForHumans() }}
                </p>
                </small>

                <p class="card-text mt-2">{{ $post->exc }}</p> 
                  <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn"style="background-color:#a7a9be">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center">No Post Found</p>
@endif

{{ $posts->links() }}
</div>
@endsection
    


@extends('layout.mainn')

@section('container')

<div class="container" >
   
    <div class="row justify-content-center">
        <div class="col-md-10">
             <h1>{{ $post->title }}</h1>

    <a href="/posts/{{ $post->slug }}"class="text-decoration-none"></a>
    <p>by: <a href="/posts?authors={{ $post->user->username }}"class="text-decoration-none">{{ $post->user->name }}</a> katagori <a href="/posts?catagory={{ $post->catagory->slug }}" class="text-decoration-none">{{ $post->catagory->name }}</a></p>
     
@if ($post->image)
<img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-3">

@else
<img src="https://picsum.photos/400/400?grayscale" alt="">
@endif

    <article class="my-3">
         {!! $post->body !!}
    </article>
   
        </div>
    </div>
</div>

   
@endsection


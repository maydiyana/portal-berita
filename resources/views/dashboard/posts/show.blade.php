@extends('dashboard.layout.main')

@section('container')
<div class="container" >
   <a href="/dashboard/posts" class="btn btn-success"><i class=" bi-arrow-left-circle-fill"></i> Back To All Post</a>
    <div class="row ">
        <div class="col-md-8">
             <h1>{{ $post->title }}</h1>

    
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
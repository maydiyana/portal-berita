@extends('dashboard.layout.main')

@section('container')
<h2>Welcome back, {{ auth()->user()->name }}</h2>
@if (session()->has('succes'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('succes') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
<div class="btn-toolbar mb-2 mb-md-0">
</div>
</div>
@endsection
@extends('layout.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-register w-100 m-auto">
      <form action="/register" method="POST">
        @csrf
       <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
       <div class="form-floating">
        
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name">
        <label for="floatingInput">Name</label>
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username">
        <label for="floatingInput">username</label>
        @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
    
        <button class="btn btn-outline-secondary w-100 py-2 mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-2">
        Alredy Account? <a class="text-decoration-none " href="/login">Login</a>
      </small>
      </main>
  </div>
</div>
@endsection


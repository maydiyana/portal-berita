@extends('layout.main')

@section('container')
<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/gaya.css">
</head>
<body>
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<div class="section">
  <div class="container">
    <div class="row full-height justify-content-center">
      <div class="col-12 text-center align-self-center py-5">
        <div class="section pb-5 pt-5 pt-sm-2 text-center">
          <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                <label for="reg-log"></label>
          <div class="card-3d-wrap mx-auto">
            @if (session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
            <div class="card-3d-wrapper">
              <div class="card-front">
                <div class="center-wrap">
                  <div class="section text-center">
                    <form action="/login" method="POST">
                      @csrf
                    <h4 class="mb-4 pb-3">Log In</h4>
                    <div class="form-group">
                      <input type="email" class="form-style" name="email" id="email" placeholder="Email">
                      <i class="input-icon uil uil-at"></i>
                    </div>	
                    <div class="form-group mt-2">
                      <input type="password" class="form-style" name="password" id="password" placeholder="Password">
                      <i class="input-icon uil uil-lock-alt"></i>
                    </div>
                    <button class="btn mt-4" type="submit">Login</button>
                    <p class="mb-0 mt-4 text-center"><a href="https://www.web-leb.com/code" class="link">Forgot your password?</a></p>
                    </form>
                  </div>
                    </div>
                  </div>
              <div class="card-back">
                <div class="center-wrap">
                  <div class="section text-center">
                    <form action="/register" method="POST">
                      @csrf
                    <h4 class="mb-2 pb-2">Sign Up</h4>
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-style" placeholder="Full Name">
                      <i class="input-icon uil uil-user"></i>
                    </div>	
                    <div class="form-group mt-2">
                      <input type="text" name="username" id="username" class="form-style" placeholder="Username">
                      <i class="input-icon uil uil-user"></i>
                    </div>	
                    <div class="form-group mt-2">
                      <input type="email" name="email" id="email" class="form-style" placeholder="Email">
                      <i class="input-icon uil uil-at"></i>
                    </div>
                    <div class="form-group mt-2">
                      <input type="password" name="password" id="password" class="form-style" placeholder="Password">
                      <i class="input-icon uil uil-lock-alt"></i>
                    </div>
                    <button class="btn mt-4" type="submit">Register</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
</body>
</html>

@endsection


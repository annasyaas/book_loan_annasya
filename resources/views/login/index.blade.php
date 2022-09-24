@extends('layouts.main')

@section('container')

<main class="form-signin w-100 m-auto">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
      <form class="my-5">
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small>
      </form>
    </div>
  </div>
</main>

@endsection
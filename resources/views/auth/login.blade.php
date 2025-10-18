@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow-sm">
      <div class="card-body">
        <h4 class="mb-4 text-center">Login</h4>

        @if($errors->any())
          <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('auth.login.store') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required autofocus>
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="remember" required>
            <label class="form-check-label" for="remember">Remember me</label>
          </div>

          <button type="submit" class="btn btn-success w-100">Login</button>
        </form>

        <div class="text-center mt-3">
          <small>Don't have an account? <a href="{{ route('auth.register') }}">Register</a></small>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

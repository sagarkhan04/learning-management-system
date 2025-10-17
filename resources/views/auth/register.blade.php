@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow-sm">
      <div class="card-body">
        <h4 class="mb-4 text-center">Register</h4>

        @if($errors->any())
          <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="#">
          @csrf
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Role</label>
            <select name="role" class="form-select" required>
              <option value="student">Student</option>
              <option value="admin">Admin</option>
            </select>
          </div>

          <button type="submit" class="btn btn-success w-100">Register</button>
        </form>

        <div class="text-center mt-3">
          <small>Already have an account? <a href="{{ route('auth.login') }}">Login</a></small>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

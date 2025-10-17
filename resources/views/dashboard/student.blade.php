@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow-sm">
      <div class="card-body text-center">
        <h3>Student Dashboard</h3>
        <p class="text-muted">Welcome, {{ auth()->user()->name }} (Student)</p>
        <form method="POST" action="{{ route('auth.logout') }}">
          @csrf
          <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

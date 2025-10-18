@include('backend.layout.inc.header')
@include('backend.layout.inc.sidebar')
@extends('backend.layout.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

{{-- ==================content================== --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

           <div class="card">
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Role</th>
                    <th scope="col">Created Date</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->created_at->timezone('UTC')->format('Y-m-d H:i a') }}</td>
                  </tr>
                 @endforeach

                </tbody>
              </table>
              <!-- End Bordered Table -->

                </div>
            </div>
        </section>
{{-- ==================content================== --}}
</main><!-- End #main -->
@include('backend.layout.inc.footer')
@endsection

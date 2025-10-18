@include('backend.layout.inc.header')
@include('backend.layout.inc.sidebar')
@extends('backend.layout.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Blank</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

{{-- ==================content================== --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p>This is some text within a card body.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{{-- ==================content================== --}}
</main><!-- End #main -->
@include('backend.layout.inc.footer')
@endsection

@include('backend.layout.inc.header')
@include('backend.layout.inc.sidebar')
@extends('backend.layout.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Course Data Show</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Course Data Show</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

{{-- ==================content================== --}}
         <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                            <table class=".table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Course Category</th>
                                        <th scope="col">Youtube Link</th>
                                        <th scope="col">Title Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Review</th>
                                        <th scope="col">Lesson</th>
                                        <th scope="col">Video</th>
                                        <th scope="col">Quiz</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Resource</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Old Price</th>
                                        <th scope="col">Curriculum Title</th>
                                        <th scope="col">Curriculum Sub-Title</th>
                                        <th scope="col">Video Or Url</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <!-- End Bordered Table -->

                            </div>

                        </div>
                    </div>
            </div>
        </section>
{{-- ==================content================== --}}
</main><!-- End #main -->
@include('backend.layout.inc.footer')
@endsection

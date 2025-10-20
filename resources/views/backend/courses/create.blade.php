@include('backend.layout.inc.header')
@include('backend.layout.inc.sidebar')
@extends('backend.layout.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Course Add</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Course Add</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

{{-- ==================content================== --}}
        <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
             <div class="card-body">
                  <form class="row g-3 needs-validation" method="POST">
                    @csrf
                    <h5 class="form-label mt-5">Course Information</h5>
                    <div class="col-12">
                      <label for="category" class="form-label">Course Category</label>
                      <select name="category" id="category" class="form-select" required>
                        <option value="">Select Category</option>
                        <option value="web_development">Web Development</option>
                        <option value="data_science">Data Science</option>
                        <option value="graphic_design">Graphic Design</option>
                      </select>
                    </div>
                    <div class="col-6">
                      <label for="youtube_link" class="form-label">Youtube Link</label>
                      <input type="text" name="youtube_link" class="form-control" id="youtube_link" required>
                    </div>
                    <div class="col-6">
                      <label for="title" class="form-label">Title Name</label>
                      <input type="text" name="title" class="form-control" id="title" required>
                    </div>
                    <div class="col-12">
                      <label for="description" class="form-label">Description</label>
                      <textarea name="description" class="form-control" id="description" required></textarea>
                    </div>
                    <h5 class="form-label mt-5">Course Review</h5>
                    <div class="col-6">
                      <label for="review" class="form-label">Review</label>
                      <input name="review" class="form-control" id="review" required></input>
                    </div>
                    <div class="col-6">
                      <label for="lesson" class="form-label">Lesson</label>
                      <input type="text" name="lesson" class="form-control" id="lesson">
                    </div>
                    <div class="col-6">
                      <label for="video" class="form-label">Video</label>
                      <input name="video" class="form-control" id="video"></input>
                    </div>
                    <div class="col-6">
                      <label for="quiz" class="form-label">Quiz</label>
                      <input name="quiz" class="form-control" id="quiz"></input>
                    </div>
                    <div class="col-6">
                      <label for="topic" class="form-label">Topic</label>
                      <input name="topic" class="form-control" id="topic"></input>
                    </div>
                    <div class="col-6">
                      <label for="resource" class="form-label">Resource</label>
                      <input name="resource" class="form-control" id="resource"></input>
                    </div>
                    <div class="col-6">
                      <label for="price" class="form-label">Price</label>
                      <input name="price" class="form-control" id="price"></input>
                    </div>
                    <div class="col-6">
                      <label for="old_price" class="form-label">Old Price</label>
                      <input name="old_price" class="form-control" id="old_price"></input>
                    </div>
                    <h5 class="form-label mt-5">Course Curriculum</h5>
                    <div class="col-6">
                      <label for="curriculum_title" class="form-label">Curriculum Title</label>
                      <input name="curriculum_title" class="form-control" id="curriculum_title"></input>
                    </div>
                    <div class="col-6">
                      <label for="curriculum_sub_title" class="form-label">Curriculum Sub-Title</label>
                      <input name="curriculum_sub_title" class="form-control" id="curriculum_sub_title"></input>
                    </div>
                    <div class="col-6">
                      <label for="video_or_url" class="form-label">Video Or Url</label>
                      <input name="video_or_url" class="form-control" id="video_or_url"></input>
                    </div>
                    <div class="col-sm-10 mt-5 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
          </div>

        </div>


      </div>
    </section>
{{-- ==================content================== --}}
</main><!-- End #main -->
@include('backend.layout.inc.footer')
@endsection

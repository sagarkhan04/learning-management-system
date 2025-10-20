<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title | Learning Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {font-family: 'Noto Sans Bengali', sans-serif; background: #fef8f6; color: #111827;}
    .course-header {background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.05);}
    .course-video iframe {width: 100%; border: none; height: 420px; border-radius: 8px;}
    .course-content {padding: 30px;}
    .course-sidebar {background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 6px rgba(0,0,0,0.05);}
    .course-sidebar h5 {font-weight: 700; margin-bottom: 15px;}
    .btn-enroll {background: #ff6b35; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 20px; text-decoration: none; display: inline-block;}
    .btn-cart {border: 2px solid #ff6b35; color: #ff6b35; font-weight: 600; border-radius: 8px; padding: 10px 20px; text-decoration: none; display: inline-block;}
    .certificate {background: #fff; border-radius: 10px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.05);}
    .curriculum {margin-top: 50px;}
    .accordion-item {border: none; border-radius: 10px; overflow: hidden; margin-bottom: 10px;}
    .accordion-button {font-weight: 600; color: #111827;}
    .accordion-button:not(.collapsed) {background-color: #fef3ee; color: #d35400;}
    .navbar-brand {font-weight: 700; color: #ff6b35;}
    .navbar-nav .nav-link {font-weight: 600; color: #111827;}
    .search-input {width: 300px;}
    @media(max-width: 768px){ .search-input {width: 100%; margin-top: 10px;} }
  </style>
</head>
<body>

  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#">LMS</a>

      <!-- Toggler for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar content -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-3">
          <!-- Category Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Categories</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Web Development</a></li>
              <li><a class="dropdown-item" href="#">Programming</a></li>
              <li><a class="dropdown-item" href="#">Design</a></li>
              <li><a class="dropdown-item" href="#">Marketing</a></li>
            </ul>
          </li>
        </ul>

        <!-- Search bar -->
        <form class="d-flex mx-auto" role="search">
          <input class="form-control search-input" type="search" placeholder="Search courses..." aria-label="Search">
          <button class="btn btn-warning ms-2" type="submit">Search</button>
        </form>



        <!-- Right-side links -->
        <ul class="navbar-nav ms-auto align-items-center">
            <a class="nav-link d-flex align-items-center text-danger" href="{{ route('auth.register') }}" role="button" data-bs-toggle="dropdown">
                Register
            </a>
            <a class="nav-link d-flex align-items-center text-danger" href="{{ route('auth.login') }}" role="button" data-bs-toggle="dropdown">
                Login
            </a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container py-5">
    <!-- Course Header -->
    <div class="row g-4">
      <div class="col-lg-8">
        <div class="course-header">
          <div class="course-video">
            <iframe src="banner-1723114722.png" allowfullscreen></iframe>
          </div>
          <div class="course-content mt-4">
            <h2 class="fw-bold mb-3">{{ $course->title }}</h2>
            <p>{{ $course->description }}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="course-sidebar">
            <p>{{ $course->review }}</p><div class="mt-3">
            </div>
            <div class="mt-4 text-start">
                <ul class="list-unstyled mb-5">
                    <li class="mb-3">&#9657 {{ $course->lesson}}</li>
                    <li class="mb-3">&#9657 {{ $course->video}}</li>
                    <li class="mb-3">&#9657 {{ $course->quiz}}</li>
                    <li class="mb-3">&#9657 {{ $course->topic}}</li>
                    <li class="mb-3">&#9657 {{ $course->resource}}</li>
                </ul>
            </div>
            <h5 class="mt-5">মূল্য: <span class="text-warning fw-bold">৳ {{ $course->price}} টাকা</span> <span><s>৳ {{ $course->old_price}} টাকা</s></span></h5>
            <a href="#" class="btn-enroll me-2">এনরোল করুন</a>
            <a href="#" class="btn-cart">কার্টে যোগ করুন</a>
        </div>
      </div>
    </div>

    <!-- Certificate Section -->
    <div class="row mt-5 align-items-center">
      <div class="col-md-6">
        <div class="certificate">
          <img src="cer.png" alt="Certificate" class="img-fluid rounded">
        </div>
      </div>
      <div class="col-md-6">
        <h4 class="fw-bold mb-3">কোর্স শেষে সার্টিফিকেট পাবেন</h4>
        <p>সফলভাবে কোর্স শেষ করলে আপনি পাবেন Learning Management System সার্টিফিকেট, যা আপনার প্রোফাইল এবং ক্যারিয়ারে বাড়াবে বিশ্বস্ততা।</p>
      </div>
    </div>

    <!-- Curriculum Section -->
    <div class="curriculum">
      <h3 class="fw-bold mb-4">কোর্স কারিকুলাম</h3>
      <div class="accordion" id="courseCurriculum">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#intro">{{ $course->curriculum_title}}<span class="mx-3"> ১ লেসন</span></button>
          </h2>
          <div id="intro" class="accordion-collapse collapse show" data-bs-parent="#courseCurriculum">
            <div class="accordion-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><img src="lesson_icon.cd3c935.png" width="20px"> ১। {{ $course->curriculum_sub_title}}</li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

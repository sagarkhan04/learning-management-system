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

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center text-danger" href="#" role="button" data-bs-toggle="dropdown">
                Cart
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-3" style="min-width: 400px;">
                <div class="text-center">
                <h1>Add to Cart</h1>
            </ul>
            <!-- Profile Dropdown -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                <img src="profile.jpg" class="rounded-circle me-2" alt="Profile" width="40" height="40">
                {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-3" style="min-width: 200px;">
                <div class="text-center">
                <img src="lesson_icon.cd3c935.png" class="rounded-circle mb-2" alt="Profile Image" width="80" height="80">
                <h6 class="fw-bold mb-0">{{ auth()->user()->name }}</h6>
                <p class="small text-muted mb-2">{{ auth()->user()->email }}</p>
                <a href="#" class="btn btn-warning btn-sm w-100 mb-2">View Profile</a>
                </div>
                <form method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            </ul>
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
            <h2 class="fw-bold mb-3">Code Your Future with PHP & MySQL</h2>
            <p>এই কোর্সে আপনি শিখবেন কীভাবে PHP এবং MySQL ব্যবহার করে Dynamic Website এবং Application তৈরি করা যায়। সহজ উদাহরণ, বাস্তব প্রজেক্ট এবং কুইজের মাধ্যমে আপনি পুরোপুরি প্রস্তুত হয়ে উঠবেন একজন পেশাদার ওয়েব ডেভেলপার হিসেবে।</p>
            <ul>
              <li>PHP এর বেসিক থেকে অ্যাডভান্স টপিক</li>
              <li>Database Connection এবং CRUD অপারেশন</li>
              <li>Form Validation, File Uploading</li>
              <li>Dynamic Website Development</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="course-sidebar">
            <p>⭐ 4.9 (২৫০+ রিভিউ)</p>
            <div class="mt-3">
            </div>
            <div class="mt-4 text-start">
                <ul class="list-unstyled mb-5">
                    <li class="mb-3">&#9657 ৬০ লেসন</li>
                    <li class="mb-3">&#9657 ৫৭ ভিডিও</li>
                    <li class="mb-3">&#9657 ৩ কুইজ</li>
                    <li class="mb-3">&#9657 ৮ টপিক</li>
                    <li class="mb-3">&#9657 রিসোর্সেস</li>
                </ul>
            </div>
            <h5 class="mt-5">মূল্য: <span class="text-warning fw-bold">৳ ১৯৯৯ টাকা</span></h5>
            <a href="#" class="btn-enroll me-2">এনরোল করুন</a>
            <a href="#" class="btn-cart">কার্টে যোগ করুন</a>
        </div>
      </div>
    </div>

    <!-- Certificate Section -->
    <div class="row mt-5 align-items-center">
      <div class="col-md-6">
        <div class="certificate">
          <img src="#" alt="Certificate" class="img-fluid rounded">
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
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#intro">Introduction<span class="mx-3"> ১ লেসন</span></button>
          </h2>
          <div id="intro" class="accordion-collapse collapse show" data-bs-parent="#courseCurriculum">
            <div class="accordion-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><img src="lesson_icon.cd3c935.png" width="20px"> ১। Course Introduction</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#php">PHP Basics<span class="mx-3">২ লেসন</span></button>
          </h2>
          <div id="php" class="accordion-collapse collapse" data-bs-parent="#courseCurriculum">
            <div class="accordion-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">১। What is PHP?</li>
                <li class="list-group-item">২। Installing PHP & Setup</li>
                <li class="list-group-item">৩। Variables & Data Types</li>
                <li class="list-group-item">৪। Operators</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mysql">MySQL Basics<span class="mx-3"> ৩ লেসন</span></button>
          </h2>
          <div id="mysql" class="accordion-collapse collapse" data-bs-parent="#courseCurriculum">
            <div class="accordion-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">১। Introduction to MySQL</li>
                <li class="list-group-item">২। Creating Database & Tables</li>
                <li class="list-group-item">৩। Insert, Update, Delete Query</li>
                <li class="list-group-item">৪। Connecting PHP with MySQL</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

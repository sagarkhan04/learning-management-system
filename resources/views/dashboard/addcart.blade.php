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


    body {font-family: 'Noto Sans Bengali', sans-serif; background: #fff; color: #111827;}
    .checkout-steps {display: flex; justify-content: center; align-items: center; margin: 40px 0; font-weight: 600;}
    .checkout-steps span {color: #d1d5db; margin: 0 20px; position: relative;}
    .checkout-steps span.active {color: #ff6b35;}
    /* .checkout-steps span::after {content: ''; position: absolute; top: 50%; right: -20px; width: 40px; height: 2px; background: #e5e7eb; transform: translateY(-50%);} */
    .checkout-steps span:last-child::after {display: none;}
    .checkout-box {background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); padding: 30px; margin-bottom: 30px;}
    .order-details h5 {font-weight: 700;}
    .course-card {display: flex; align-items: center; justify-content: space-between; border: 1px solid #e5e7eb; border-radius: 10px; padding: 10px 15px;}
    .course-card img {border-radius: 8px; width: 80px; height: 60px; object-fit: cover;}
    .course-info {flex-grow: 1; margin-left: 15px;}
    .price {font-weight: 700; color: #111827;}
    .welcome-box h4 {font-weight: 700; margin-bottom: 10px;}
    .btn-submit {background: #ff6b35; color: #fff; border: none; border-radius: 8px; font-weight: 600; padding: 12px 0; width: 100%; transition: 0.3s;}
    .btn-submit:hover {background: #e65c2f;}
    .forgot-link {font-size: 14px; margin-top: 15px;}
    .forgot-link a {color: #ff6b35; text-decoration: none;}
    .forgot-link a:hover {text-decoration: underline;}
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
                <img src="/../profile.jpg" class="rounded-circle me-2" alt="Profile" width="40" height="40">
                {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-3" style="min-width: 200px;">
                <div class="text-center">
                <img src="/../profile.jpg" class="rounded-circle mb-2" alt="Profile Image" width="80" height="80">
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
    <!-- Checkout Steps -->
    <div class="checkout-steps">
      <span class="active">১ লগ ইন</span>
      <span>২ চেক আউট</span>
      <span>৩ পেমেন্ট</span>
    </div>

    <div class="row g-4">
      <!-- Order Details -->
      <div class="col-lg-6">
        <div class="checkout-box order-details">
          <h5>অর্ডার ডিটেইলস</h5>
          <p class="text-muted small mb-4">অর্ডারের বিস্তারিত</p>
          <div class="course-card">
            <img src="/../card.jpg" alt="Course">
            <div class="course-info">
              <h6 class="mb-0">Code Your Future with PHP & MySQL</h6>
              <small class="text-muted">Mahadi Tahsan</small>
            </div>
            <div class="price">১৪৯৯ টাকা</div>
          </div>
        </div>
      </div>

      <!-- Welcome Box -->
      <div class="col-lg-6">
        <div class="checkout-box welcome-box text-center text-lg-start">
          <h4>দক্ষতার যাত্রায় আপনাকে স্বাগতম!</h4>
          <p class="text-muted">পেমেন্ট সম্পন্ন করতে মোবাইল নাম্বার দিয়ে এগিয়ে যান</p>
          <form>
            <div class="mb-3">
              <input type="text" class="form-control form-control-lg" placeholder="মোবাইল নাম্বার" required>
            </div>
            <button type="submit" class="btn-submit">সাবমিট করুন</button>
          </form>
          <div class="forgot-link">
            <p>প্রবেশওয়ার্ড ভুলে গেলে <a href="#">এখানে</a> ক্লিক করুন</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('backend.users') }}">
                    <i class="bi bi-person"></i>
                    <span>Users</span>
                </a>
            </li><!-- End Users Page Nav -->
                    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Courses</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('backend.courses.create') }}">
                    <i class="bi bi-circle"></i><span>Course Create</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.courses.show') }}">
                    <i class="bi bi-circle"></i><span>Course Show</span>
                    </a>
                </li>
                </ul>
            </li><!-- End Forms Nav -->



        </ul>

    </aside>
    <!-- End Sidebar-->

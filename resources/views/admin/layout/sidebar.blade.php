<!-- Sidebar -->
<nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('dashboard')}}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('courses')}}">
                    <i class="fas fa-book"></i> Courses
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('teachers')}}">
                    <i class="fas fa-chalkboard-teacher"></i> Teachers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('students')}}">
                    <i class="fas fa-graduation-cap"></i> Students
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('improvements')}}">
                    <i class="fas fa-chart-line"></i> Improvements
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('messages')}}">
                    <i class="fas fa-envelope"></i> Messages
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>

</nav>

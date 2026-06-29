<nav class="sidebar">
    <div class="sidebar-logo">
        <div class="logo-icon"><i class="bi bi-grid-3x3-gap-fill text-white"></i></div>
        <span>EduNexus</span>
    </div>
    <div class="sidebar-section">
        <div class="sidebar-label">Main Menu</div>
        <a href="{{ route('dashboard') }}" class="sidebar-link active"><i class="bi bi-grid-1x2-fill"></i> Dashboard <i
                class="bi bi-chevron-right arrow"></i></a>
        <a href="student-affairs.html" class="sidebar-link"><i class="bi bi-person-lines-fill"></i> Student
            Affairs</a>
        <a href="finance.html" class="sidebar-link"><i class="bi bi-journal-bookmark-fill"></i> Finance</a>
        <a href="parent-portal.html" class="sidebar-link"><i class="bi bi-people-fill"></i> Parent Portal</a>
        <a href="teacher-portal.html" class="sidebar-link"><i class="bi bi-person-video2"></i> Teacher Portal</a>
        <a href="student-portal.html" class="sidebar-link"><i class="bi bi-book-fill"></i> Student Portal</a>
        <a href="analytics.html" class="sidebar-link"><i class="bi bi-bar-chart-fill"></i> Analytics</a>
        <a href="admin.html" class="sidebar-link"><i class="bi bi-gear-fill"></i> Admin Settings</a>
    </div>
    <div class="sidebar-bottom">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-link text-decoration-none text-danger fw-bold p-0"><i class="bi bi-box-arrow-right"></i> Sign Out</button>
        </form>
        <div class="academic-badge mt-2">
            <div class="title">Academic Year</div>
            <div class="year">2023 – 2024</div>
            <div class="sub">Term 2 • Week 12</div>
        </div>
    </div>
</nav>

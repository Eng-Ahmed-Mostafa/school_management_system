<x-app-layout>

    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <div class="page-title">Executive Dashboard</div>
            <div class="page-sub">Institutional Overview for Academic Year 2023–2024</div>
        </div>
        <div class="d-flex gap-2">
            <button class="btn-outline-gray"><i class="bi bi-calendar3 me-1"></i> Academic Calendar</button>
            <button class="btn-blue"><i class="bi bi-megaphone-fill me-1"></i> New Announcement</button>
        </div>
    </div>

    <!-- KPI Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-start mb-1">
                    <div><i class="bi bi-people-fill text-primary fs-5"></i></div>
                    <span class="stat-badge">↑ 12%</span>
                </div>
                <div class="stat-label">Total Enrollment</div>
                <div class="stat-value">1,284</div>
                <div class="stat-mini-chart" style="background:linear-gradient(to right,#bfdbfe,#3b82f6);"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-start mb-1">
                    <div><i class="bi bi-graph-up-arrow text-success fs-5"></i></div>
                    <span class="stat-badge">↑ 2.4%</span>
                </div>
                <div class="stat-label">Daily Attendance</div>
                <div class="stat-value">94.2%</div>
                <div class="stat-mini-chart" style="background:linear-gradient(to right,#bbf7d0,#22c55e);"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-start mb-1">
                    <div><i class="bi bi-credit-card-fill text-primary fs-5"></i></div>
                    <span class="stat-badge">↑ 8.1%</span>
                </div>
                <div class="stat-label">Fee Collection</div>
                <div class="stat-value">$62,400</div>
                <div class="stat-mini-chart" style="background:linear-gradient(to right,#bfdbfe,#1a56db);"></div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <!-- Announcements -->
        <div class="col-lg-8">
            <div class="bg-white border rounded-3 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <div class="fw-bold" style="font-size:1rem;">Campus Announcements</div>
                        <div class="text-muted" style="font-size:.8rem;">Latest updates from administrative
                            offices</div>
                    </div>
                    <a href="#" class="text-primary text-decoration-none fw-medium"
                        style="font-size:.875rem;">View All</a>
                </div>
                <div class="announce-row">
                    <div class="announce-date">
                        <div class="month">OCT</div>
                        <div class="day">24</div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex gap-2 mb-1 flex-wrap">
                            <span class="announce-tag tag-academic">Academic</span>
                            <span class="text-muted" style="font-size:.75rem;">• Posted by Admin Office</span>
                        </div>
                        <div style="font-size:.875rem;font-weight:500;">Q2 Parent-Teacher Association Meeting
                            Scheduled</div>
                    </div>
                    <i class="bi bi-three-dots-vertical text-muted"></i>
                </div>
                <div class="announce-row">
                    <div class="announce-date">
                        <div class="month">OCT</div>
                        <div class="day">22</div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex gap-2 mb-1 flex-wrap">
                            <span class="announce-tag tag-extra">Extracurricular</span>
                            <span class="text-muted" style="font-size:.75rem;">• Posted by Coach Miller</span>
                        </div>
                        <div style="font-size:.875rem;font-weight:500;">Annual Sports Day: Registration Now Open
                        </div>
                    </div>
                    <i class="bi bi-three-dots-vertical text-muted"></i>
                </div>
                <div class="announce-row">
                    <div class="announce-date">
                        <div class="month">OCT</div>
                        <div class="day">20</div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex gap-2 mb-1 flex-wrap">
                            <span class="announce-tag tag-facility">Facility</span>
                            <span class="text-muted" style="font-size:.75rem;">• Posted by Library Dept</span>
                        </div>
                        <div style="font-size:.875rem;font-weight:500;">New Library Resource Center Opening
                            Ceremony</div>
                    </div>
                    <i class="bi bi-three-dots-vertical text-muted"></i>
                </div>
                <div class="announce-row">
                    <div class="announce-date">
                        <div class="month">OCT</div>
                        <div class="day">18</div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex gap-2 mb-1 flex-wrap">
                            <span class="announce-tag tag-important">Important</span>
                            <span class="text-muted" style="font-size:.75rem;">• Posted by Dean of Students</span>
                        </div>
                        <div style="font-size:.875rem;font-weight:500;">Notice: Mid-Term Examination Schedule
                            Updates</div>
                    </div>
                    <i class="bi bi-three-dots-vertical text-muted"></i>
                </div>
            </div>
        </div>

        <!-- Upcoming Events -->
        <div class="col-lg-4">
            <div class="bg-white border rounded-3 p-4 mb-3">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-calendar3-event text-primary"></i>
                    <span class="fw-bold">Upcoming Events</span>
                </div>
                <div class="event-item">
                    <div class="event-date-label">TODAY • 02:00 PM</div>
                    <div class="event-title">Board of Governors Meeting</div>
                    <div class="event-loc"><i class="bi bi-geo-alt me-1"></i>Conference Room A</div>
                </div>
                <div class="event-item">
                    <div class="text-muted" style="font-size:.75rem;font-weight:700;">OCT 26 • 09:00 AM</div>
                    <div class="event-title">Faculty Professional Development</div>
                    <div class="event-loc"><i class="bi bi-geo-alt me-1"></i>Auditorium</div>
                </div>
                <div class="event-item">
                    <div class="text-muted" style="font-size:.75rem;font-weight:700;">OCT 28 • ALL DAY</div>
                    <div class="event-title">National Holiday: School Closed</div>
                </div>
                <button class="btn-outline-gray w-100 mt-3" style="font-size:.82rem;">View Full Schedule</button>
            </div>

            <!-- GPA Card -->
            <div class="gpa-card">
                <div class="d-flex justify-content-between align-items-start">
                    <div style="font-size:.78rem;opacity:.8;">Academic Performance</div>
                    <i class="bi bi-bar-chart-fill"></i>
                </div>
                <div style="font-size:1.3rem;font-weight:700;margin-top:4px;">Goal: 85%</div>
                <div class="mt-3 mb-1">
                    <div class="d-flex justify-content-between" style="font-size:.78rem;opacity:.8;"><span>Current
                            Average GPA</span><span>3.4 / 4.0</span></div>
                </div>
                <div class="progress-bar-custom mb-3">
                    <div class="progress-fill" style="width:85%;"></div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex">
                        <div
                            style="width:24px;height:24px;border-radius:50%;background:rgba(255,255,255,.3);border:2px solid white;margin-right:-6px;">
                        </div>
                        <div
                            style="width:24px;height:24px;border-radius:50%;background:rgba(255,255,255,.3);border:2px solid white;margin-right:-6px;">
                        </div>
                        <div
                            style="width:24px;height:24px;border-radius:50%;background:rgba(255,255,255,.3);border:2px solid white;">
                        </div>
                    </div>
                    <span style="font-size:.75rem;opacity:.85;">+12 Dean's List Students</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Portals -->
    <div class="bg-white border rounded-3 p-4 mb-4">
        <div class="fw-bold mb-3">Quick Management Portals</div>
        <div class="row g-3">
            <div class="col-md-4">
                <a href="student-affairs.html" class="portal-card d-block text-decoration-none">
                    <div class="portal-icon" style="background:#eff6ff;"><i
                            class="bi bi-person-plus-fill text-primary fs-5"></i></div>
                    <div class="fw-semibold mb-1">Student Affairs</div>
                    <div class="text-muted" style="font-size:.82rem;">Manage classes, student rosters, and
                        academic promotions.</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="finance.html" class="portal-card d-block text-decoration-none">
                    <div class="portal-icon" style="background:#fff7ed;"><i
                            class="bi bi-wallet2 text-warning fs-5"></i></div>
                    <div class="fw-semibold mb-1">Finance Center</div>
                    <div class="text-muted" style="font-size:.82rem;">Monitor fee structures, invoicing, and
                        institutional payments.</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="teacher-portal.html" class="portal-card d-block text-decoration-none">
                    <div class="portal-icon" style="background:#f0fdf4;"><i
                            class="bi bi-display text-success fs-5"></i></div>
                    <div class="fw-semibold mb-1">Teacher Hub</div>
                    <div class="text-muted" style="font-size:.82rem;">Access faculty schedules, attendance logs,
                        and grade entries.</div>
                </a>
            </div>
        </div>
    </div>

    <!-- Attendance Trend -->
    <div class="bg-white border rounded-3 p-4">
        <div class="fw-bold mb-1">Institutional Attendance Trend</div>
        <div class="text-muted mb-3" style="font-size:.82rem;">Year-over-year weekly attendance comparison</div>
        <div class="bar-chart-wrap">
            <div class="bar-group">
                <div class="bar-current" style="height:82px;"></div>
                <div class="bar-prev" style="height:65px;"></div>
                <div class="bar-label">Mon</div>
            </div>
            <div class="bar-group">
                <div class="bar-current" style="height:75px;"></div>
                <div class="bar-prev" style="height:72px;"></div>
                <div class="bar-label">Tue</div>
            </div>
            <div class="bar-group">
                <div class="bar-current" style="height:90px;"></div>
                <div class="bar-prev" style="height:60px;"></div>
                <div class="bar-label">Wed</div>
            </div>
            <div class="bar-group">
                <div class="bar-current" style="height:68px;"></div>
                <div class="bar-prev" style="height:80px;"></div>
                <div class="bar-label">Thu</div>
            </div>
            <div class="bar-group">
                <div class="bar-current" style="height:85px;"></div>
                <div class="bar-prev" style="height:55px;"></div>
                <div class="bar-label">Fri</div>
            </div>
        </div>
        <div class="d-flex gap-3 mt-2">
            <div class="d-flex align-items-center gap-2">
                <div style="width:12px;height:12px;background:var(--blue);border-radius:3px;"></div><span
                    style="font-size:.78rem;color:#6b7280;">This Year</span>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div style="width:12px;height:12px;background:#e5e7eb;border-radius:3px;"></div><span
                    style="font-size:.78rem;color:#6b7280;">Last Year</span>
            </div>
        </div>
    </div>

    <div class="app-footer">
        <div class="d-flex justify-content-between align-items-center">
            <span>© 2024 EduNexus Systems &nbsp;·&nbsp; Version 2.4.0-stable</span>
            <div class="d-flex align-items-center gap-3">
                <div class="footer-status">
                    <div class="dot-green"></div> System Status: Optimal
                </div>
                <a href="#" class="text-muted text-decoration-none" style="font-size:.78rem;">Documentation</a>
                <a href="#" class="text-muted text-decoration-none" style="font-size:.78rem;">Support
                    Portal</a>
            </div>
        </div>
    </div>
</x-app-layout>

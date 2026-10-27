
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <!--begin::Brand Image-->
            <img
                src="{{ asset('assets/img/AdminLTELogo.png') }}"
                alt="School Management Logo"
                class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">School Management</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Search-->
    <div class="sidebar-search" role="search">
        <label for="sidebar-search-input" class="visually-hidden">Filter menu</label>
        <input
            type="search"
            id="sidebar-search-input"
            class="form-control form-control-sm"
            placeholder="Filter menu…"
            autocomplete="off"
            data-lte-toggle="sidebar-search"
            data-lte-target="#navigation"
        />
        <p class="fs-7 text-secondary mt-2 mb-0" data-lte-search-empty role="status" hidden>
            No matching pages.
        </p>
    </div>
    <!--end::Sidebar Search-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                data-accordion="false"
                id="navigation"
            >
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Student Management: Dropdown Removed -->
                <li class="nav-item">
                    <a href="{{ url('/admin/students') }}" class="nav-link">
                        <i class="nav-icon bi bi-mortarboard"></i>
                        <p>Student Management</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-person-workspace"></i>
                        <p>Teacher Management <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/teachers') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All Teachers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/teachers/create') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Add Teacher</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/class-teachers') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Assign Class Teacher</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-building"></i>
                        <p>Academic Management <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/academic-sessions') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Academic Sessions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/classes') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Classes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/sections') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sections</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/subjects') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Subjects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/timetable') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Class Timetable</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-calendar-check"></i>
                        <p>Attendance <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/student-attendance') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Student Attendance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/teacher-attendance') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Teacher Attendance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/attendance/reports') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Attendance Reports</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-cash-coin"></i>
                        <p>Fees Management <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/fee-structure') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fee Structure</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/fees/collect') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Collect Fees</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/fee-payments') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Payment History</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/pending-fees') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pending Fees</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/fees/reports') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fee Reports</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-journal-check"></i>
                        <p>Examination <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/exam-types') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Exam Types</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/exams') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Examinations</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/exam-schedule') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Exam Schedule</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/marks') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Enter Marks</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/report-cards') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Report Cards</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Parent Management <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/parents') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All Parents</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/parents/create') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Add Parent</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-person-badge"></i>
                        <p>Staff Management <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/staff') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All Staff</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/staff/create') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Add Staff</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/staff/departments') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Departments</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-journal-text"></i>
                        <p>Homework & Assignments <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/homework') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All Homework</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/homework/create') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Create Homework</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-bus-front"></i>
                        <p>Transport Management <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/transport/routes') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Routes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/transport/vehicles') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Vehicles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/transport/drivers') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Drivers</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-book"></i>
                        <p>Library Management <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/library/books') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All Books</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/library/issues') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Issued Books</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/library/returns') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Book Returns</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-megaphone"></i>
                        <p>Communication <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/notices') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Notice Board</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/announcements') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Announcements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/messages') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Messages</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-bar-chart-line"></i>
                        <p>Reports & Analytics <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/reports/students') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Student Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/reports/attendance') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Attendance Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/reports/fees') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fee Collection Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/reports/examinations') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Examination Reports</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people-fill"></i>
                        <p>User Management <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/users') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/roles') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Roles & Permissions</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-gear"></i>
                        <p>Settings <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/settings/school-profile') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>School Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/settings/academic') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Academic Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/settings') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>System Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/profile') }}" class="nav-link">
                        <i class="nav-icon bi bi-person-circle"></i>
                        <p>My Profile</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-right"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->

            <!-- Docs CTA (bottom of sidebar) -->
            <div class="p-3 mt-3 border-top border-secondary border-opacity-25">
                <a
                    href="./docs/introduction.html"
                    class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
                >
                    <i class="bi bi-book" aria-hidden="true"></i>
                    View documentation
                </a>
            </div>
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>

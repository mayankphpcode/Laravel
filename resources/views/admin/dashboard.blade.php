@extends('layouts.admin.app')

@section('content')

<div class="container-fluid dashboard-cards">

    <div class="dashboard-cards-grid">

        {{-- Total Students Card --}}
        <div class="student-stat-card">

            <div class="card-body">
                <div class="student-stat-top">

                    <div>
                        <p class="student-stat-label">Total Students</p>

                        <h2 class="student-stat-number">
                            {{ $totalStudents }}
                        </h2>

                        <p class="student-stat-description">
                            Students registered in the school
                        </p>
                    </div>

                    <div class="student-stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                </div>
            </div>

            <div class="student-stat-footer">
                <i class="bi bi-mortarboard-fill"></i>
                <span>Student Overview</span>
            </div>

        </div>


        {{-- Total Users Card --}}
        <div class="student-stat-card">

            <div class="card-body">
                <div class="student-stat-top">

                    <div>
                        <p class="student-stat-label">Total Users</p>

                        <h2 class="student-stat-number">
                            {{ $totalusers }}
                        </h2>

                        <p class="student-stat-description">
                            Total registered users
                        </p>
                    </div>

                    <div class="student-stat-icon">
                        <i class="bi bi-person-check-fill"></i>
                    </div>

                </div>
            </div>

            <div class="student-stat-footer">
                <i class="bi bi-people-fill"></i>
                <span>User Overview</span>
            </div>

        </div>


        {{-- Add New Cards Here --}}

    </div>

</div>

@endsection

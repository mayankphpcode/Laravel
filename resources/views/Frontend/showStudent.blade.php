@extends('layouts.frontend.app')

@section('title') View Students @endsection

@section('content')
<div class="container py-4">
@if (session()->has('success'))
    <x-message type="success" message="{{ session()->get('success') }}" title="Success"></x-message>
@endif


<!-- Student Search Filter -->
<div class="container-fluid mb-4">
    <div class="student-search-card">
        <div class="search-header">
            <h4>Search Students</h4>
            <p>Filter student records using the fields below.</p>
        </div>

        <form action="" method="GET">
            <div class="row g-3">

                <!-- Student Name -->
                <div class="col-md-6 col-lg-3">
                    <label for="student_name" class="form-label">
                        Student Name
                    </label>
                    <input
                        type="text"
                        name="student_name"
                        id="student_name"
                        class="form-control"
                        placeholder="Enter student name"
                        value="{{ request('student_name') }}"
                    >
                </div>

                <!-- Email -->
                <div class="col-md-6 col-lg-3">
                    <label for="email" class="form-label">
                        Email Address
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Enter email address"
                        value="{{ request('email') }}"
                    >
                </div>

                <!-- Phone Number -->
                <div class="col-md-6 col-lg-3">
                    <label for="phone" class="form-label">
                        Phone Number
                    </label>
                    <input
                        type="text"
                        name="phone"
                        id="phone"
                        class="form-control"
                        placeholder="Enter phone number"
                        value="{{ request('phone') }}"
                    >
                </div>

                <!-- Class -->
                <div class="col-md-6 col-lg-3">
                    <label for="class" class="form-label">
                        Class
                    </label>
                    <select name="class" id="class" class="form-select">
                        <option value="">All Classes</option>
                        @foreach (['MCA', 'BCA', 'MBA', 'BBA', 'B.Tech', 'M.Tech', 'Others'] as $class)
                            <option value="{{ $class }}"
                                {{ request('class') == $class ? 'selected' : '' }}>
                                {{ $class }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Buttons -->
                <div class="col-12 d-flex gap-2 justify-content-end mt-4">
                    <a href="{{ route('students.index') }}"
                       class="btn btn-reset">
                        Reset
                    </a>

                    <button type="submit" class="btn btn-search">
                        <i class="bi bi-search me-1"></i>
                        Search
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

    {{-- Page Heading --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
        <div>
            <h2 class="fw-bold text-primary mb-1">Admission Management</h2>
            <p class="text-muted mb-0">View and manage all student admissions.</p>
        </div>

        <span class="badge bg-primary fs-6 px-3 py-2 mt-2">
            Total Students: {{ $allStudent->count() }}
        </span>

        <span><a href="{{route('home')  }}">Add New Record</a></span>
    </div>


    {{-- Table Card --}}
    <div class="card border-0 shadow rounded-4">

        <div class="card-header bg-primary text-white py-3 rounded-top-4">
            <h5 class="mb-0">All Admission Records</h5>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle mb-0">

                    <thead class="table-dark">
                        <tr>
                            <th class="px-3 py-3">ID</th>
                            <th class="py-3">Student Name</th>
                            <th class="py-3">Parent Name</th>
                            <th class="py-3">Phone</th>
                            <th class="py-3">Email</th>
                            <th class="py-3">Course</th>
                            <th class="py-3">Address</th>
                            <th class="py-3 text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php($index=1)
                        @forelse($allStudent as $student)
                            <tr>
                                <td class="px-3 fw-bold">
                                    {{ $index }}
                                </td>

                                <td class="fw-semibold text-primary">
                                    {{ $student->student_name }}
                                </td>

                                <td>
                                    {{ $student->parent_name }}
                                </td>

                                <td class="text-nowrap">
                                    {{ $student->phone }}
                                </td>

                                <td>
                                    {{ $student->email ?? 'N/A' }}
                                </td>

                                <td>
                                    <span class="badge bg-info text-dark px-3 py-2">
                                        {{ $student->class }}
                                    </span>
                                </td>

                                <td style="min-width: 180px;">
                                    {{ \Illuminate\Support\Str::limit($student->message ?? 'N/A', 40) }}
                                </td>

                                <td class="text-center text-nowrap">
                                    <a href="{{ route('students.edit', $student->id) }}"
                                       class="btn btn-sm btn-warning fw-semibold">
                                        Edit
                                    </a>
                                </td>
                                <td class="text-center text-nowrap">
                                    <a href="{{ route('students.delete', $student->id) }}"
                                       class="btn btn-sm btn-warning fw-semibold">
                                        Delete
                                    </a>
                                </td>
                            </tr>

                            @php($index++)

                        @empty
                            <tr>
                                <td colspan="10" class="text-center py-5">
                                    <h5 class="text-muted">No Admissions Found</h5>
                                    <p class="text-muted mb-0">
                                        No student admission records are available yet.
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>

        <div class="card-footer bg-light text-muted py-3">
            Showing {{ $allStudent->count() }} admission record(s)
        </div>
 {{ $allStudent->links() }}
    </div>
</div>
@endsection

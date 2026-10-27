@extends('layouts.frontend..app')

@section('title', 'Edit Admission')

@section('content')
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-lg-9">

                {{-- Page Header --}}
                <div class="mb-4">
                    <a href="{{ route('students.index') }}" class="btn btn-outline-secondary mb-3">
                        &larr; Back to Admissions
                    </a>

                    <h2 class="fw-bold text-primary mb-1">
                        Edit Admission
                    </h2>

                    <p class="text-muted">
                        Update the student admission details below.
                    </p>
                </div>

                {{-- Form Card --}}
                <div class="card border-0 shadow rounded-4 overflow-hidden">

                    <div class="card-header bg-primary text-white p-4">
                        <h5 class="mb-1">Student Information</h5>
                        <small>Admission ID: #{{ $admission->id }}</small>
                    </div>

                    <div class="card-body p-4 p-md-5">

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Please fix the following errors:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('students.update', $admission->id) }}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="row g-4">

                                {{-- Student Name --}}
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        Student Name *
                                    </label>

                                    <input type="text" name="student_name"
                                        class="form-control @error('student_name') is-invalid @enderror"
                                        value="{{ old('student_name', $admission->student_name) }}"
                                        placeholder="Enter student name" required>

                                    @error('student_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Parent Name --}}
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        Parent Name *
                                    </label>

                                    <input type="text" name="parent_name"
                                        class="form-control @error('parent_name') is-invalid @enderror"
                                        value="{{ old('parent_name', $admission->parent_name) }}"
                                        placeholder="Enter parent name" required>

                                    @error('parent_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Phone --}}
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        Phone Number *
                                    </label>

                                    <input type="tel" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone', $admission->phone) }}" placeholder="Enter phone number"
                                        required>

                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        Email Address
                                    </label>

                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $admission->email) }}" placeholder="Enter email address">

                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Class --}}
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        Class *
                                    </label>


                                    <select id="course" name="class" class="form-select" required>

                                        <option value="">Select Course</option>

                                        @foreach (getClasses() as $class)
                                            <option value="{{ $class }}"
                                                {{ $class == $admission->class ? 'selected' : '' }}>{{ $class }}
                                            </option>
                                        @endforeach

                                    </select>

                                    @error('class')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Date of Birth --}}
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        Date of Birth
                                    </label>

                                    <input type="date" name="date_of_birth"
                                        class="form-control @error('date_of_birth') is-invalid @enderror"
                                        value="{{ old('date_of_birth', $admission->date_of_birth ? \Illuminate\Support\Carbon::parse($admission->date_of_birth)->format('Y-m-d') : '') }}">

                                    @error('date_of_birth')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Message --}}
                                <div class="col-12">
                                    <label class="form-label fw-semibold">
                                        Additional Message
                                    </label>

                                    <textarea name="message" rows="4" class="form-control @error('message') is-invalid @enderror"
                                        placeholder="Enter additional information">{{ old('message', $admission->message) }}</textarea>

                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            {{-- Buttons --}}
                            <div class="d-flex flex-wrap gap-2 mt-4">
                                <button type="submit" class="btn btn-primary px-4 py-2">
                                    Update Admission
                                </button>

                                <a href="{{ route('students.index') }}" class="btn btn-light border px-4 py-2">
                                    Cancel
                                </a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

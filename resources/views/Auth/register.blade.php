
@extends('layouts.auth.auth-layout')

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 col-lg-5">

            <div class="register-form">
                <h2 class="text-center mb-4">Register Form</h2>

              <form action="{{ route('users.store') }}" method="POST">
    @csrf

    <!-- Tumhare form ke inputs yahan aayenge -->
@if (session()->has('success'))
    <x-message type="success" message="{{ session()->get('success') }}" title="Success"></x-message>
@endif
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control"
                               placeholder="Enter your name" required>
                                 @error('name')
                           {{ $message }}
                       @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control"
                               placeholder="Enter your email" required>
                                  @error('email')
                           {{ $message }}
                       @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control"
                               placeholder="Enter password" required>
                                  @error('password')
                           {{ $message }}
                       @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Register
                    </button>

                    <p class="text-center mt-3 mb-0">
                        Already have an account?
                        <a href="{{ route('login') }}">Login</a>
                    </p>
                </form>
            </div>

        </div>
    </div>
</div>

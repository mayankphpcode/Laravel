@extends('layouts.auth.auth-layout')

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 col-lg-5">

            <div class="register-form">
                <h2 class="text-center mb-4">Login Form</h2>

                <form method="post" action="{{ route('login.request') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input
                            type="email" name="email"
                            class="form-control"
                            placeholder="Enter your email"
                            required
                        >

                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Enter your password"
                            required
                        >

                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="rememberMe"
                            >
                            <label class="form-check-label" for="rememberMe">
                                Remember Me
                            </label>
                        </div>

                        <a href="#">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Login
                    </button>

                    <p class="text-center mt-3 mb-0">
                        Don't have an account?
                        <a href="{{ route('userRegister') }}">Register</a>
                    </p>
                </form>
            </div>

        </div>
    </div>
</div>

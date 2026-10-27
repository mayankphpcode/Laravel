@extends('layouts.frontend.app')

@section('title', 'Home - My School')

@section('content')

<div class="container py-5">

    <!-- HERO + REGISTRATION FORM -->
    <div class="row g-4 align-items-start">

        <!-- LEFT: HERO CONTENT -->
        <div class="col-lg-8">
            <section class="school-hero">

                <span class="school-badge">
                    <span class="badge-dot"></span>
                    WELCOME TO MY SCHOOL
                </span>

                <h1>
                    Building Bright Minds,
                    <span>Shaping Better Futures.</span>
                </h1>

                <p class="hero-description">
                    Discover a place where curiosity grows, talents shine,
                    and every student gets the opportunity to achieve their
                    dreams through quality education.
                </p>

                <div class="hero-buttons">
                    <a href="{{ url('/admissions') }}" class="hero-btn-primary">
                        Explore Admissions <span>→</span>
                    </a>

                    <a href="{{ url('/about') }}" class="hero-btn-secondary">
                        Discover Our School
                    </a>
                </div>

                <!-- SCHOOL IMAGE -->
                <div class="school-image">
                    <img
                        src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=1200&q=85"
                        alt="School building and learning environment">

                    <div class="image-caption">
                        <div class="caption-icon">✦</div>
                        <div>
                            <h5>Learn. Grow. Succeed.</h5>
                            <p>Every child has the potential to shine.</p>
                        </div>
                    </div>
                </div>

                <!-- HIGHLIGHTS -->
                <div class="school-stats">
                    <div class="stat-item">
                        <div class="stat-icon">🎓</div>
                        <div>
                            <h3>Quality</h3>
                            <p>Education</p>
                        </div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-icon">👩‍🏫</div>
                        <div>
                            <h3>Expert</h3>
                            <p>Teachers</p>
                        </div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-icon">📚</div>
                        <div>
                            <h3>Smart</h3>
                            <p>Learning</p>
                        </div>
                    </div>
                </div>

            </section>
        </div>

        <!-- RIGHT: REGISTRATION FORM -->
        <div class="col-lg-4">
            <div class="registration-sticky">
                <x-rightsideForm />
            </div>
        </div>

    </div>

</div>

<!-- FULL-WIDTH WHY CHOOSE US SECTION -->
<section class="why-school">

    <div class="container">

        <div class="section-heading text-center">
            <span>WHY CHOOSE US</span>
            <h2>A Better Learning Experience</h2>
            <p>
                We create opportunities for every student to learn,
                grow with confidence, and achieve their goals.
            </p>
        </div>

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon icon-blue">📖</div>
                    <h5>Quality Education</h5>
                    <p>
                        Build strong foundations through engaging lessons
                        and a student-focused learning environment.
                    </p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon icon-yellow">🌟</div>
                    <h5>Expert Faculty</h5>
                    <p>
                        Learn from dedicated teachers who support students
                        throughout their educational journey.
                    </p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon icon-green">💡</div>
                    <h5>Modern Learning</h5>
                    <p>
                        Encourage curiosity, creativity, critical thinking,
                        and practical skills for the future.
                    </p>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon icon-purple">📚</div>
                    <h5>Library & Resources</h5>
                    <p>
                        Support independent learning with educational
                        resources that inspire students to explore.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection

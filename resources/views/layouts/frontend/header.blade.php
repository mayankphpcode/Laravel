
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"
   style="color: #ffffff !important;">
    Mk <span style="color: #ffc857;">School</span>
</a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/academics') }}">Academics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/departments') }}">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        @if(auth()->check())

                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        @else
<a class="nav-link" href="{{ route('login') }}">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<footer>
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <h4>My School</h4>
                <p>
                    Providing quality education and building
                    a brighter future for every student.
                </p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/academics') }}">Academics</a></li>
                    <li><a href="{{ url('/library') }}">Library</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5>Contact Us</h5>
                <p>Email: info@myschool.com</p>
                <p>Phone: +91 98765 43210</p>
                <p>Address: Your School Address</p>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                &copy; {{ date('Y') }} My School.
                All Rights Reserved.
            </p>
        </div>
    </div>
</footer>

<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Newsletter</h4>
                        <p class="mb-3">Stay updated with our latest news and promotions. Subscribe to our newsletter.
                        </p>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input class="form-control mb-3" type="text" name="name"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control mb-3" type="email" name="email"
                                    placeholder="Enter your email" required>
                            </div>
                            <button type="submit" class="btn btn-secondary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Explore</h4>
                    <a href="{{ url('/') }}"><i class="fas fa-angle-right me-2"></i> Home</a>
                    <a href="{{ url('service') }}"><i class="fas fa-angle-right me-2"></i> Services</a>
                    <a href="{{ url('about') }}"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <!-- Removed some extra links -->
                    <a href="{{ url('contact') }}"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Our Services</h4>
                    <a href="{{ url('project') }}"><i class="fas fa-angle-right me-2"></i> General Construction</a>
                    <a href="{{ url('service') }}"><i class="fas fa-angle-right me-2"></i> Property Maintenance</a>
                    <!-- Removed some extra services -->
                    <a href="{{ url('project') }}"><i class="fas fa-angle-right me-2"></i> Design Build</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Contact Info</h4>
                    <a href=""><i class="fa fa-map-marker-alt me-2"></i> 22 Avenue Okito, Q/kiwele -
                        Lubumbashi</a>
                    <a href=""><i class="fas fa-envelope me-2"></i> info@kizuriholding.com</a>
                    <a href=""><i class="fas fa-phone me-2"></i> +243 890 299 699</a>
                    <a href=""><i class="fas fa-phone me-2"></i> +243 821 665 355</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body">
                    <a href="#" class="border-bottom text-white">
                        <i class="fas fa-copyright text-light me-2"></i>
                        <span id="current-year"></span> Kizuri Holding SARL
                    </a>, All right reserved.
                </span>
            </div>

            <script>
                document.getElementById("current-year").textContent = new Date().getFullYear();
            </script>

            <div class="col-md-6 text-center text-md-end text-body">
                Designed By <a class="border-bottom text-white" href="https://www.jrmhd.tech/">Jrmhd
                    Technologies</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

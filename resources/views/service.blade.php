<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kizuri Holdings - Our Services</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="img/logo.ico" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @include('Topbar')


    <!-- Navbar & Hero Start -->
    <div class="container-fluid sticky-top px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light py-3 px-4">
            <a href="{{ url('/') }}" class="navbar-brand p-0">
                <img src="img/logo.png" alt="Logo" style="width: 150px; height: auto;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto pt-2 pt-lg-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('service') }}" class="nav-item nav-link active">Services</a>
                    <a href="{{ url('project') }}" class="nav-item nav-link">Projects</a>
                    <a href="{{ url('blog') }}" class="nav-item nav-link">Our Blog</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-flex align-items-center flex-nowrap pt-3  pt-lg-0 ms-lg-2">
                    <button class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                            class="fas fa-search"></i></button>
                    <a href="{{ url('quoterequest') }}"
                        class="btn btn-secondary py-2 px-4 ms-3 flex-wrap flex-sm-shrink-0">Get a
                        Quate</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('about') }}">About</a></li>
                <li class="breadcrumb-item active text-secondary">Service</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Services Start -->
    <style>
        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-img-top-container {
            overflow: hidden;
            height: 200px;
            /* Adjust for desired image height */
        }

        .card-img-top {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h2 class="display-4 mb-3" style="color: #dc3545;">What We Do</h2>
                <p class="text-uppercase text-secondary fs-5 mb-0">Kizuri Holding Provides Comprehensive Services</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 card-hover-effect">
                    <div class="card-img-top-container">
                        <img src="img/service-2.jpg" class="card-img-top" alt="Equipment Rental">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #dc3545;">Equipment Rental</h5>
                        <p class="card-text">We offer a wide range of well-maintained equipment for contracting or
                            wet/dry hire.</p>
                        <a href="{{ url('quoterequest') }}" class="btn btn-dark">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 card-hover-effect">
                    <div class="card-img-top-container">
                        <img src="img/service-3.jpg" class="card-img-top" alt="Earth Works">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #dc3545;">Earth Works</h5>
                        <p class="card-text">Expert land development for open pit mines and civil projects.</p>
                        <a href="{{ url('quoterequest') }}" class="btn btn-dark">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 card-hover-effect">
                    <div class="card-img-top-container">
                        <img src="img/service-5.jpg" class="card-img-top" alt="Fabrication & Installation">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #dc3545;">Fabrication & Installation</h5>
                        <p class="card-text">Design and fabrication of steel tanks, petrol stations, fuel storage
                            tanks, and more.</p>
                        <a href="{{ url('quoterequest') }}" class="btn btn-dark">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 card-hover-effect">
                    <div class="card-img-top-container">
                        <img src="img/service-1.jpg" class="card-img-top" alt="Tailings Dams">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #dc3545;">Tailings Dams</h5>
                        <p class="card-text">Expert design and construction of tailings dams for mining companies in
                            the DRC.</p>
                        <a href="{{ url('quoterequest') }}" class="btn btn-dark">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 card-hover-effect">
                    <div class="card-img-top-container">
                        <img src="img/translogis.jpg" class="card-img-top" alt="Loading & Haulage">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #dc3545;">Loading & Haulage</h5>
                        <p class="card-text">Efficient loading and hauling of materials using our fleet of trucks.</p>
                        <a href="{{ url('quoterequest') }}" class="btn btn-dark">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 card-hover-effect">
                    <div class="card-img-top-container">
                        <img src="img/roadworks.jpg" class="card-img-top" alt="Road Construction & Maintenance">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #dc3545;">Road Construction & Maintenance</h5>
                        <p class="card-text">Construction and maintenance of dirt and paved roads, on and off mining
                            sites.</p>
                        <a href="{{ url('quoterequest') }}" class="btn btn-dark">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 card-hover-effect">
                    <div class="card-img-top-container">
                        <img src="img/service-6.jpg" class="card-img-top" alt="Maintenance Services">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #dc3545;">Maintenance Services</h5>
                        <p class="card-text">Curative and preventive maintenance for mining and construction equipment.
                        </p>
                        <a href="{{ url('quoterequest') }}" class="btn btn-dark">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 card-hover-effect">
                    <div class="card-img-top-container">
                        <img src="img/service-4.jpg" class="card-img-top" alt="Printing & Signage">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #dc3545;">Printing & Signage</h5>
                        <p class="card-text">Custom printing and signage for retail and corporate clients.</p>
                        <a href="{{ url('quoterequest') }}" class="btn btn-dark">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->



    </div>
    </div>
    </div>
    <!-- Services End -->

    <div style="background-color: #f2f2f2; padding: 50px 0;">
        <div style="max-width: 800px; margin: auto; text-align: center;">
            <h2 style="color: #333; font-size: 32px; margin-bottom: 20px;">Request a Quote</h2>
            <p style="color: #666; font-size: 18px; margin-bottom: 30px;">Let us bring your project to life. Fill out
                the form below and we'll get back to you as soon as possible.</p>
            <a href="{{ url('quoterequest') }}"
                style="background-color: #007bff; color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; font-size: 16px;">Get
                Started</a>
        </div>
    </div>





    @include('footer')



    <!-- Back to Top -->
    <a href="{{ url('about') }}" class="btn btn-secondary btn-lg-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

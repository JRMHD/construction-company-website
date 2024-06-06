<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kizuri Holding SARL - Multi-Sector Congolese Company</title>

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
                <img src="img\IMG_0135 (1).jpg" alt="Logo" style="width: 110px; height: auto;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto pt-2 pt-lg-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('service') }}" class="nav-item nav-link">Services</a>
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

    <div class="container-fluid overflow-hidden px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s"
                style="animation-delay: 1s;">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img\open pit 1.jpg" class="img-fluid w-100" alt="First slide" />
                    <div class="carousel-caption">
                        <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Multi-Sector
                            Company</p>
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Exceeding
                            Expectations with Quality Service</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                            style="animation-delay: 1.5s;">
                            Established in 2022, KIZURI HOLDING SARL is a multi-sector Company based in HAUT-KATANGA
                            PROVINCE of the Democratic Republic of Congo and headquartered in the city of Lubumbashi.
                            Our main aim is to provide best solutions to our clients through our wide range of products.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('service') }}">Explore Our Services</a>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('about') }}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\open pit 2.jpg" class="img-fluid w-100" alt="Second slide" />
                    <div class="carousel-caption">
                        <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Diverse Solutions
                        </p>
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Best Solutions
                            for Your Needs</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                            style="animation-delay: 1.5s;">
                            We offer a wide range of products and services tailored to meet diverse needs across various
                            sectors in the DRC.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('quoterequest') }}">Get a Quote</a>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('about') }}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\open pit 3.jpg" class="img-fluid w-100" alt="Third slide" />
                    <div class="carousel-caption">
                        <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Client-Focused</p>
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Serving
                            Clients Across the DRC</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                            style="animation-delay: 1.5s;">
                            We are committed to serving clients across various sectors in the Democratic Republic of
                            Congo with quality and efficiency.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('quoterequest') }}">Get a Quote</a>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('about') }}">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn-lg-square fadeInLeft animate__animated" aria-hidden="true"
                    data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i
                        class="fas fa-chevron-left fa-2x"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn-lg-square fadeInRight animate__animated"
                    aria-hidden="true" data-animation="fadeInRight" data-delay="1.1s"
                    style="animation-delay: 1.3s;"><i class="fas fa-chevron-right fa-2x"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

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



    <style>
        /* Custom CSS for modern styling and hover effects */
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            /* Remove default card border */
            border-radius: 10px;
            /* Add rounded corners */
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow on hover */
        }

        .service-card img {
            object-fit: cover;
            /* Ensures images cover container while maintaining aspect ratio */
            height: 200px;
            /* Adjust for desired image height */
            width: 100%;
        }

        .core-value-icon {
            font-size: 2em;
            /* Adjust icon size */
            color: #dc3545;
            /* Your brand's red */
        }
    </style>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h2 class="display-4 mb-3 text-uppercase" style="color: #dc3545;">What We Do</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\bushclear.jpg" class="card-img-top" alt="Bush Clearing Works">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Bush Clearing Works</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\earthww.jpg" class="card-img-top" alt="Earthworks">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Earthworks</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\rentals.jpg" class="card-img-top" alt="Equipment Rentals">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Equipment Rentals</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\hauling.jpg" class="card-img-top" alt="Loading & Haulage">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Loading & Haulage</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\mining.jpg" class="card-img-top" alt="Tailings Dams Construction">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Tailings Dams Construction</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\printing.jpg" class="card-img-top" alt="Printing & Signage">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Printing & Signage</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\civilworks.jpg" class="card-img-top" alt="Civil Works">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Civil Works</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\Piping.jpg" class="card-img-top" alt="Piping Works">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Piping Works</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\fabriins.jpg" class="card-img-top" alt="Fabrication & Installation">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Fabrication & Installation</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img/roadworks.jpg" class="card-img-top" alt="Road Construction & Maintenance">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Road Construction & Maintenance</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\servicemains.jpg" class="card-img-top" alt="Maintenance Service">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">Maintenance Service</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <img src="img\gensupplies.jpg" class="card-img-top" alt="General Supplies">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;">General Supplies</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>
    <div class="row mt-5">
        <div class="col-md-12 text-center mb-5">
            <h2 class="display-4 mb-3 text-uppercase" style="color: #dc3545;">Our Core Values</h2>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
            <i class="core-value-icon fas fa-handshake"></i>
            <p class="mt-2" style="color: #343a40;">Integrity</p>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
            <i class="core-value-icon fas fa-user-tie"></i>
            <p class="mt-2" style="color: #343a40;">Professionalism</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
            <i class="core-value-icon fas fa-lightbulb"></i>
            <p class="mt-2" style="color: #343a40;">Innovation</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
            <i class="core-value-icon fas fa-heart"></i>
            <p class="mt-2" style="color: #343a40;">Compassion</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
            <i class="core-value-icon fas fa-sync-alt"></i>
            <p class="mt-2" style="color: #343a40;">Adaptability</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
            <i class="core-value-icon fas fa-user-shield"></i>
            <p class="mt-2" style="color: #343a40;">Loyalty</p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-4">
            <i class="core-value-icon fas fa-users"></i>
            <p class="mt-2" style="color: #343a40;">Teamwork</p>
        </div>
    </div>

    </div>




    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-item-image d-flex">
                        <img src="img/about.jpg" class="img-1 img-fluid w-50" alt="">
                        <img src="img/about-3.jpg" class="img-fluid w-50" alt="">
                        <div class="about-item-image-content">
                            <img src="img/about-1.png" class="img-fluid w-100 h-100" style="object-fit: cover;"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="about-item-content">
                        <p class="text-uppercase text-secondary fs-5 mb-0">Multi-Sector Congolese Company</p>
                        <h2 class="display-4 text-capitalize mb-3">KIZURI HOLDING SARL</h2>
                        <p class="mb-4 fs-5">
                            Established in 2022, KIZURI HOLDING SARL is a multi-sector Company based in HAUT-KATANGA
                            PROVINCE of the Democratic Republic of Congo and headquartered in the city of Lubumbashi.
                            Our main aim is to provide the best solutions to our clients through our wide range of
                            products.
                        </p>
                        <div class="pb-4 mb-4 border-bottom">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="about-item-content-img">
                                        <img src="img/about-2.jpg" class="img-fluid w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="d-flex mb-4">
                                        <div class="text-secondary">
                                            <i class="fas fa-cubes fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">Wide Range of Products</h4>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-secondary">
                                            <i class="fas fa-handshake fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">Customer-Focused Solutions</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-0 gx-4 justify-content-between pb-4">
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Quality Products
                                </p>
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Experienced Team
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Client
                                    Satisfaction</p>
                                <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Proven
                                    Track Record</p>
                            </div>
                        </div>
                        <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp"
                            data-wow-delay="0.1s" href="{{ url('about') }}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About End -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <p class="text-uppercase text-secondary fs-5 mb-0">WHY CHOOSE US</p>
                <h2 class="display-4 text-capitalize mb-3">Our Three Promises to You</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-money-bill-wave text-primary fa-5x"></i>
                        </div>
                        <a href="{{ url('about') }}" class="h4 d-block my-4">Save Money</a>
                        <p class="mb-0">We are committed to providing cost-effective solutions that help you save
                            money.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-chart-line text-primary fa-5x"></i>
                        </div>
                        <a href="{{ url('about') }}" class="h4 d-block my-4">Value for Money</a>
                        <p class="mb-0">Our services and products deliver exceptional value, ensuring your investment
                            pays off.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-handshake text-primary fa-5x"></i>
                        </div>
                        <a href="{{ url('about') }}" class="h4 d-block my-4">Grow the DRC Economy</a>
                        <p class="mb-0">By choosing us, you are supporting a competent local company and contributing
                            to the growth of the DRC economy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <div>
        <h3 style="text-align: center; color: red; margin-bottom: 20px;">Some Of Our Clients</h3>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
            <!-- Replace the image sources with the paths to your logo images -->
            <img src="img\DAngelo-Logo-PNG.png" style="max-width: 100px; max-height: 100px; margin-bottom: 20px;"
                alt="Logo 1">
            <img src="img\equitybcdc-logo-vector.jpg"
                style="max-width: 100px; max-height: 100px; margin-bottom: 20px;" alt="Logo 2">
            <img src="img\logo508by140.jpg" style="max-width: 100px; max-height: 100px; margin-bottom: 20px;"
                alt="Logo 3">
            <img src="img\mmg.png" style="max-width: 100px; max-height: 100px; margin-bottom: 20px;" alt="Logo 4">
            <img src="img\somika.png" style="max-width: 100px; max-height: 100px; margin-bottom: 20px;"
                alt="Logo 5">
            <img src="img\images (1).jpg" style="max-width: 100px; max-height: 100px; margin-bottom: 20px;"
                alt="Logo 6">
            <img src="img\logo.jpg" style="max-width: 100px; max-height: 100px; margin-bottom: 20px;" alt="Logo 6">
        </div>
    </div>






    <!-- Fact Counter -->
    <div class="container-fluid counter py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-box">
                        <div class="counter-item">
                            <div class="counter-item-style"></div>
                            <div class="counter-item-inner p-5">
                                <i class="fas fa-thumbs-up fa-4x text-secondary"></i>
                                <h4 class="text-dark my-4">Completed Projects</h4>
                                <div class="counter-counting">
                                    <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">456</span>
                                    <span class="h1 fw-bold text-secondary">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-box">
                        <div class="counter-item">
                            <div class="counter-item-style"></div>
                            <div class="counter-item-inner p-5">
                                <i class="fas fa-users fa-4x text-secondary"></i>
                                <h4 class="text-dark my-4">Happy Customers</h4>
                                <div class="counter-counting">
                                    <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">513</span>
                                    <span class="h1 fw-bold text-secondary">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-box">
                        <div class="counter-item">
                            <div class="counter-item-style"></div>
                            <div class="counter-item-inner p-5">
                                <i class="fas fa-user fa-4x text-secondary"></i>
                                <h4 class="text-dark my-4">Qualified Engineers</h4>
                                <div class="counter-counting">
                                    <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">53</span>
                                    <span class="h1 fw-bold text-secondary">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-box">
                        <div class="counter-item">
                            <div class="counter-item-style"></div>
                            <div class="counter-item-inner p-5">
                                <i class="fas fa-heart fa-4x text-secondary"></i>
                                <h4 class="text-dark my-4">Years Experience</h4>
                                <div class="counter-counting">
                                    <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">17</span>
                                    <span class="h1 fw-bold text-secondary">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center pt-4 wow fadeInUp" data-wow-delay="0.9s">
                    <a class="counter-btn btn btn-secondary py-3 px-5" href="{{ url('contact') }}">Join With Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Fact Counter -->

    <!-- Projects Start -->
    <div class="container-fluid project py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <p class="text-uppercase text-secondary fs-5 mb-0">Our Projects</p>
                <h2 class="display-4 text-capitalize mb-3" style="color: #dc3545;">Recently Completed Projects</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\mining.jpg" class="card-img-top" alt="Tailings Dam Construction">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Tailings Dam Construction</h5>
                            <p class="card-text">Kizuri completed a tailings dam construction at SOMIKA mining company
                                at their Lupoto site in year 2022.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\fabriins.jpg" class="card-img-top" alt="Fabrication & Installation">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Fabrication & Installation</h5>
                            <p class="card-text">Kizuri completed fabrication and installations of fuel storage tanks
                                construction and piping works for one of out client in lubumbashi on route likasi in
                                year 2023. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\earthww.jpg" class="card-img-top" alt="Earthworks Project">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Earthworks Project</h5>
                            <p class="card-text">Kizuri machineries doing earthworks for an open-pit mine development
                                project in likasi area outside lubumbashi,DRC. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\bushclear.jpg" class="card-img-top" alt="Bush Clearing Project">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Bush Clearing Works</h5>
                            <p class="card-text">Kizuri did a bush clearing works to the client's satisfaction for
                                TERRA FARM located on route kasenga outside of lubumbashi, DRC ,the farm is a subsidiary
                                of SOMIKA GROUP .</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\ourvalues.jpg" class="card-img-top" alt="Our Values">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Our Values</h5>
                            <p class="card-text">Our values in passion and safety of our team apply always at site.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\paultryfarm.jpg" class="card-img-top" alt="Poultry Farm Construction">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Poultry Farm Construction</h5>
                            <p class="card-text">Kizuri finished construction of a poultry farm houses with capacity of
                                15,000birds at KANYAKA in 2024 for our client FERME BARAKA SARL.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\worksearth.jpg" class="card-img-top" alt="Open-Pit Mine Development">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Open-Pit Mine Development & Earthworks</h5>
                            <p class="card-text">Earthworks and open pit mine development completed for
                                a client at bazano concession 45km outside lubumbashi in 2024</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\supervision.jpg" class="card-img-top" alt="Site Supervision">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Site Supervision</h5>
                            <p class="card-text">In every site we are operating in we put a highly motivated and
                                skilled site supervisors , engiiers and maintenance managers to ensure your projects is
                                delivered on schedule</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\backhole.jpg" class="card-img-top" alt="Backhoe Loader Services">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Backhoe Loader</h5>
                            <p class="card-text">Our Backhoe loader doing some maintainace works in a Car park in
                                Lubumbashi</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <img src="img\crushing.jpg" class="card-img-top" alt="Crushing Site Operations">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #343a40;">Crushing Site Operations</h5>
                            <p class="card-text">Kizuri holding machines working in a crashing site inside our client
                                site at MMG KINSEVERE MINE IN lubumbashi drc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Projects End -->




    <!-- Blog Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <p class="text-uppercase text-secondary fs-5 mb-0">News & Blog</p>
                <h2 class="display-4 text-capitalize mb-3">Our Latest News and Articles</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item h-100">
                        <div class="blog-img">
                            <img src="img\mining.jpg" class="img-fluid w-100" alt="Tailings Dam Construction">
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 2022</p>
                                <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                            </div>
                            <a href="{{ url('contact') }}" class="h4 d-block mb-4">Tailings Dam Construction
                                Completed</a>
                            <p class="card-text">Kizuri completed a tailings dam construction at SOMIKA mining company
                                at their Lupoto site.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('contact') }}">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item h-100">
                        <div class="blog-img">
                            <img src="img\bushclear.jpg" class="img-fluid w-100" alt="Bush Clearing Project">
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 2023 </p>
                                <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                            </div>
                            <a href="{{ url('contact') }}" class="h4 d-block mb-4">Bush Clearing Success at TERRA
                                FARM</a>
                            <p class="card-text">Kizuri successfully completed bush clearing works for TERRA FARM, a
                                subsidiary of SOMIKA GROUP, on route Kasenga.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('contact') }}">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item h-100">
                        <div class="blog-img">
                            <img src="img\worksearth.jpg" class="img-fluid w-100" alt="Open-Pit Mine Development">
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 2024</p>
                                <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                            </div>
                            <a href="{{ url('contact') }}" class="h4 d-block mb-4">Open-Pit Mine Development and
                                Earthworks Completed</a>
                            <p class="card-text">Kizuri completed earthworks and open-pit mine development at the
                                Bazano concession, 45km outside Lubumbashi.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('contact') }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog End -->


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

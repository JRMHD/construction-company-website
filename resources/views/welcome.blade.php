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
                <img src="img/logo.png" alt="Logo" style="width: 150px; height: auto;">
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

    <!-- Carousel Start -->
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
                    <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="First slide" />
                    <div class="carousel-caption">
                        <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Multi-Sector
                            Congolese Company
                        </p>
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Exceeding
                            Expectations with Quality Service</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                            style="animation-delay: 1.5s;">Established in 2022, Kizuri Holding SARL is a multi-sector
                            Congolese company dealing in goods and services provision with an outstanding reputation for
                            service, designed to meet or exceed our client's expectations even in the most complex
                            provinces throughout DRC. We are conveniently located in Lubumbashi.</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('service') }}">Explore Our
                                Services</a>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('about') }}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Second slide" />
                    <div class="carousel-caption">
                        <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Diverse Expertise
                        </p>
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Comprehensive
                            Solutions for Tough Demands</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                            style="animation-delay: 1.5s;">From bush clearing and mass excavations to civil works,
                            piping, fabrication,
                            road works, transport, logistics, hospitality, and agribusiness, our skilled professionals
                            deliver
                            top-quality solutions tailored to meet your toughest demands and scheduling challenges.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('quoterequest') }}">Get a Quote</a>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('about') }}">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-3.jpg" class="img-fluid w-100" alt="Third slide" />
                    <div class="carousel-caption">
                        <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Committed to
                            Excellence
                        </p>
                        <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                            data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Serving
                            Provincial Governments, Parastatals, NGOs, and Commercial Companies</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                            style="animation-delay: 1.5s;">We take pride in serving the provincial governments,
                            parastatals, NGOs and commercial, for-profit companies. We focus all efforts on consistently
                            delivering quality products and service which exceeds the toughest demands and scheduling
                            challenges while adhering to environmental and statutory regulations.</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('quoterequest') }}">Get a Quote</a>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('about') }}">Read
                                More</a>
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
    <!-- Carousel End -->
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


    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-item-image d-flex">
                        <img src="img/about.jpg" class="img-1 img-fluid w-50" alt="">
                        <img src="img/about-3.jpg" class="img-2 img-fluid w-50" alt="">
                        <div class="about-item-image-content">
                            <img src="img/about-1.png" class="img-fluid w-100 h-100" style="object-fit: cover;"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="about-item-content">
                        <p class="text-uppercase text-secondary fs-5 mb-0">PROVIDING BEST SOLUTIONS TO CUSTOMERS</p>
                        <h2 class="display-4 text-capitalize mb-3">Catalyzing Sustainable Economic Growth in DRC</h2>
                        <p class="mb-4 fs-5">Our main aim is to provide best solutions to the customers through our
                            wide range of products and Services. We fully intend on building on our history of success
                            so that Kizuri Holding may be a catalyst to a sustainable economy in DRC Congo for many
                            decades to come.</p>
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
                                            <i class="fas fa-industry fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">Wide Range of Services</h4>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-secondary">
                                            <i class="fas fa-leaf fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">Hospitality and Agribusiness</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-0 gx-4 justify-content-between pb-4">
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Excellent
                                    Customer Service</p>
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Experienced
                                    Professionals</p>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Quality Products
                                    and Services</p>
                                <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i>
                                    Environmental Responsibility</p>
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
    <!-- Features Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <p class="text-uppercase text-secondary fs-5 mb-0">WHY CHOOSE US</p>
                <h2 class="display-4 text-capitalize mb-3">Why Choose Kizuri Holding SARL</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-user-shield text-primary fa-5x"></i>
                        </div>
                        <a href="{{ url('about') }}" class="h4 d-block my-4">Professionalism and Integrity</a>
                        <p class="mb-0">We are committed to maintaining the highest standards of professionalism and
                            integrity in all our operations.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-users-cog text-primary fa-5x"></i>
                        </div>
                        <a href="{{ url('about') }}" class="h4 d-block my-4">Experienced Team</a>
                        <p class="mb-0">Our team of skilled professionals and engineers ensure efficiency,
                            durability, and safety in every project.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-check-circle text-primary fa-5x"></i>
                        </div>
                        <a href="{{ url('about') }}" class="h4 d-block my-4">Commitment to Quality</a>
                        <p class="mb-0">We provide quality products and services, adhering to the highest standards
                            to meet and exceed client expectations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    <!-- Services Start -->
    <div class="container-fluid service bg-light pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <p class="text-uppercase text-secondary fs-5 mb-0">What We Do</p>
                <h2 class="display-4 text-capitalize mb-3">Kizuri Holding provides excellent values</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-1.jpg" class="img-fluid w-100" alt="Bush Clearing">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <i class="fas fa-tree text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Bush Clearing</a>
                            <p class="text-white mb-4">We offer efficient bush clearing services to prepare land for
                                various uses.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center ps-4 w-100">
                                <h4>Bush Clearing</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-tree text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-2.jpg" class="img-fluid w-100" alt="Equipment Rentals">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <i class="fas fa-tools text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Equipment Rentals</a>
                            <p class="text-white mb-4">We provide a wide range of equipment rentals for various
                                projects.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Equipment Rentals</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-tools text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-3.jpg" class="img-fluid w-100"
                                alt="Mass Excavations / Earth Works">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <i class="fas fa-digging text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Mass Excavations / Earth
                                Works</a>
                            <p class="text-white mb-4">We specialize in large-scale excavation and earth works
                                projects.</p>
                            <a class="btn btn-secondary py-2 px-4"href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Mass Excavations / Earth Works</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-digging text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-4.jpg" class="img-fluid w-100" alt="Civil Works">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-building text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Civil Works</a>
                            <p class="text-white mb-4">Our civil works services include infrastructure development and
                                maintenance.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Civil Works</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-building text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-5.jpg" class="img-fluid w-100" alt="Structural Works">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-wrench text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Structural Works</a>
                            <p class="text-white mb-4">We deliver high-quality structural works for various
                                construction projects.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Structural Works</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-wrench text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-6.jpg" class="img-fluid w-100"
                                alt="Piping, Fabrication And Installations">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-pipe text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Piping, Fabrication And
                                Installations</a>
                            <p class="text-white mb-4">Our piping, fabrication, and installation services are
                                top-notch.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Piping, Fabrication And Installations</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-pipe text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img\roadworks.jpg" class="img-fluid w-100" alt="Road Works">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-road text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Road Works</a>
                            <p class="text-white mb-4">Our road works services ensure the construction and maintenance
                                of high-quality roads.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Road Works</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-road text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img\translogis.jpg" class="img-fluid w-100" alt="Transport & Logistics">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-shipping-fast text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Transport & Logistics</a>
                            <p class="text-white mb-4">We provide reliable transport and logistics services for all
                                your needs.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Transport & Logistics</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-shipping-fast text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img\hospiagric.jpg" class="img-fluid w-100" alt="Hospitality and Agribusiness">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-seedling text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Hospitality and Agribusiness</a>
                            <p class="text-white mb-4">We are involved in hospitality and agribusiness through our
                                agricultural and supply department.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Hospitality and Agribusiness</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-seedling text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-secondary py-3 px-5 mt-4" href="{{ url('services') }}">More Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


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
                <h2 class="display-4 text-capitalize mb-3">Recent Completed Projects</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="img/project-1.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">Bush Clearing</p>
                                    <a href="{{ url('about') }}" class="h4">Extensive Land Clearing in
                                        Mbandaka</a>
                                    <p class="mb-0 mt-3">Kizuri Holding SARL successfully completed a large-scale bush
                                        clearing project, making way for future agricultural and developmental use.</p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="{{ url('about') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="img/project-2.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">Mass Excavation</p>
                                    <a href="{{ url('about') }}" class="h4">Mass Excavation for Industrial Site
                                        in Kolwezi</a>
                                    <p class="mb-0 mt-3">This project involved extensive earthworks to prepare a large
                                        site for industrial development, including leveling and foundation preparation.
                                    </p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="{{ url('about') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="img\roadworks.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">Road Works</p>
                                    <a href="{{ url('about') }}" class="h4">Highway Expansion in Bukavu</a>
                                    <p class="mb-0 mt-3">Kizuri Holding SARL completed a major highway expansion
                                        project, improving transportation infrastructure and connectivity in the region.
                                    </p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="{{ url('about') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="img/project-4.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">Transport & Logistics</p>
                                    <a href="{{ url('about') }}" class="h4">Logistics Network Setup in Goma</a>
                                    <p class="mb-0 mt-3">This project involved establishing a comprehensive logistics
                                        network to enhance the efficiency and reliability of goods transportation across
                                        the region.</p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="{{ url('about') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <a class="btn btn-secondary py-3 px-5" href="{{ url('project') }}">More Projects</a>
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
                            <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Bush Clearing Innovations">
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 15 May 2024
                                </p>
                                <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                            </div>
                            <a href="{{ url('about') }}" class="h4 d-block mb-4">Innovations in Bush Clearing
                                Techniques</a>
                            <p>Discover how Kizuri Holding SARL is pioneering new techniques in bush clearing to enhance
                                efficiency and environmental sustainability.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item h-100">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Mass Excavation Projects">
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 20 April
                                    2024</p>
                                <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                            </div>
                            <a href="{{ url('about') }}" class="h4 d-block mb-4">Mass Excavation Projects:
                                Challenges and Solutions</a>
                            <p>Learn about the challenges and innovative solutions involved in our latest mass
                                excavation projects across various sites.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item h-100">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Road Work Developments">
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 10 March
                                    2024</p>
                                <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                            </div>
                            <a href="{{ url('about') }}" class="h4 d-block mb-4">Road Work Developments: Enhancing
                                Connectivity</a>
                            <p>Explore how our road work projects are improving transportation infrastructure and
                                connectivity in various regions.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
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

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
                    <a href="{{ url('about') }}"
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
                            data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Masters of
                            Consistency and Quality</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                            style="animation-delay: 1.5s;">Established in 2022, Kizuri Holding SARL is a leading
                            multi-sector Congolese
                            company providing goods and services across DRC. With an outstanding reputation for service,
                            we consistently
                            deliver quality products and exceed client expectations even in the most complex provinces.
                        </p>
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
                            Solutions.</h1>
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
                                href="{{ url('about') }}">Get a Quote</a>
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
                            data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Building a
                            Sustainable Future</h1>
                        <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                            style="animation-delay: 1.5s;">Guided by our core values of professionalism, integrity,
                            accountability,
                            transparency, quality, and innovation, we strive for sustainable economic growth in DRC. Our
                            experienced
                            team, backed by professional qualifications, participates at all levels to provide
                            personalized services
                            while adhering to environmental and statutory regulations.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated"
                                data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;"
                                href="{{ url('about') }}">Get a Quote</a>
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
                        <p class="text-uppercase text-secondary fs-5 mb-0">WE ARE A MULTI-SECTOR COMPANY</p>
                        <h2 class="display-4 text-capitalize mb-3">Making your vision come true through quality and
                            consistency.</h2>
                        <p class="mb-4 fs-5">Established in 2022, Kizuri Holding SARL is a multi-sector Congolese
                            company based in Lubumbashi, offering goods and services with an outstanding reputation for
                            exceeding client expectations, even in the most complex provinces throughout DRC.</p>
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
                                            <i class="fas fa-user-shield fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">Professionalism and Integrity</h4>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-secondary">
                                            <i class="fas fa-users-cog fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">Experienced and Certified Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-0 gx-4 justify-content-between pb-4">
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> 100%
                                    Satisfaction
                                </p>
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Trained
                                    Employees
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Accountability
                                </p>
                                <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i>
                                    Transparency
                                </p>
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
                <p class="text-uppercase text-secondary fs-5 mb-0">WHY US</p>
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
                            durability,
                            and safety in every project.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-check-circle text-primary fa-5x"></i>
                        </div>
                        <a href="{{ url('about') }}" class="h4 d-block my-4">Commitment to Quality</a>
                        <p class="mb-0">We provide quality products and services, adhering to the highest standards
                            to
                            meet and exceed client expectations.</p>
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
                <p class="text-uppercase text-secondary fs-5 mb-0">Our Services</p>
                <h2 class="display-4 text-capitalize mb-3">Our service is professional & reliable</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-1.jpg" class="img-fluid w-100" alt="General Construction">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <i class="fas fa-home text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">General Construction</a>
                            <p class="text-white mb-4">We provide top-notch general construction services ensuring
                                quality and durability in every project.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center ps-4 w-100">
                                <h4>General Construction</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-home text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-2.jpg" class="img-fluid w-100" alt="Property Maintenance">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <i class="fas fa-users-cog text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Property Maintenance</a>
                            <p class="text-white mb-4">Our property maintenance services ensure your properties remain
                                in excellent condition all year round.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Property Maintenance</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-users-cog text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-3.jpg" class="img-fluid w-100" alt="Project Management">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <i class="fas fa-project-diagram text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Project Management</a>
                            <p class="text-white mb-4">Our expert project management services ensure timely and
                                successful completion of all projects.</p>
                            <a class="btn btn-secondary py-2 px-4"href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Project Management</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-project-diagram text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-4.jpg" class="img-fluid w-100" alt="Virtual Design & Build">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-file-invoice-dollar text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Virtual Design & Build</a>
                            <p class="text-white mb-4">We offer innovative virtual design and build services for
                                efficient and effective project planning.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Virtual Design & Build</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-file-invoice-dollar text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-5.jpg" class="img-fluid w-100" alt="Preconstruction">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-cogs text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Preconstruction</a>
                            <p class="text-white mb-4">Our preconstruction services include detailed planning and
                                analysis to ensure project success from the start.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Preconstruction</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-cogs text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-6.jpg" class="img-fluid w-100" alt="Design Build">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-sitemap text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Design Build</a>
                            <p class="text-white mb-4">We provide comprehensive design-build services to streamline
                                your
                                project from concept to completion.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Design Build</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-sitemap text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-secondary py-3 px-5 mt-4" href="{{ url('about') }}">More Services</a>
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
                                    <p class="fs-5 text-secondary mb-2">Residential Construction</p>
                                    <a href="{{ url('about') }}" class="h4">Luxurious Apartments in Kinshasa</a>
                                    <p class="mb-0 mt-3">Kizuri Holding SARL completed a state-of-the-art apartment
                                        complex in the heart of Kinshasa, providing modern living spaces with premium
                                        amenities.</p>
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
                                    <p class="fs-5 text-secondary mb-2">Commercial Development</p>
                                    <a href="{{ url('about') }}" class="h4">Modern Office Park in Lubumbashi</a>
                                    <p class="mb-0 mt-3">This project involved the construction of a cutting-edge
                                        office
                                        park, catering to the needs of businesses with advanced facilities and ample
                                        parking space.</p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="{{ url('about') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="img/project-3.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">Infrastructure</p>
                                    <a href="{{ url('about') }}" class="h4">New Highway Construction</a>
                                    <p class="mb-0 mt-3">Kizuri Holding SARL successfully completed the construction of
                                        a new highway, enhancing transportation efficiency and connectivity between
                                        major cities.</p>
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
                                    <img src="img/project-4.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">Industrial Construction</p>
                                    <a href="{{ url('about') }}" class="h4">Eco-Friendly Manufacturing Plant</a>
                                    <p class="mb-0 mt-3">This project saw the development of an eco-friendly
                                        manufacturing plant, featuring green building practices and sustainable energy
                                        solutions.</p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="{{ url('about') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
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
                            <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Sustainable Building Techniques">
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 15 May 2024
                                </p>
                                <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                            </div>
                            <a href="{{ url('about') }}" class="h4 d-block mb-4">Innovations in Sustainable Building
                                Techniques</a>
                            <p>Discover how Kizuri Holding SARL is leading the way in sustainable construction with new
                                eco-friendly materials and practices.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item h-100">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Community Development Projects">
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 20 April
                                    2024
                                </p>
                                <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                            </div>
                            <a href="{{ url('about') }}" class="h4 d-block mb-4">Community Development Projects:
                                Building for the
                                Future</a>
                            <p>Learn about our latest community development projects designed to improve living
                                standards and foster economic growth in local communities.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item h-100">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Infrastructure Advances">
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 10 March
                                    2024
                                </p>
                                <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                            </div>
                            <a href="{{ url('about') }}" class="h4 d-block mb-4">Infrastructure Advances: Connecting
                                Communities</a>
                            <p>Explore how Kizuri Holding SARL is enhancing infrastructure across the region, promoting
                                connectivity and economic development.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
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

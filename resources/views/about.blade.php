<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us - Kizuri Holdings</title>

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
                    <a href="{{ url('about') }}" class="nav-item nav-link active">About</a>
                    <a href="{{ url('service') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ url('project') }}" class="nav-item nav-link">Projects</a>
                    <a href="{{ url('blog') }}" class="nav-item nav-link">Our Blog</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-flex align-items-center flex-nowrap pt-3  pt-lg-0 ms-lg-2">
                    <button class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                            class="fas fa-search"></i></button>
                    <a href="#" class="btn btn-secondary py-2 px-4 ms-3 flex-wrap flex-sm-shrink-0">Get a
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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">About</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

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
                        <p class="text-uppercase text-secondary fs-5 mb-0">ABOUT KIZURI HOLDINGS</p>
                        <h2 class="display-4 text-capitalize mb-3">Making Your Construction Vision a Reality.</h2>
                        <p class="mb-4 fs-5">Kizuri Holdings is a leading construction company dedicated to delivering
                            high-quality projects with precision and excellence. With a focus on customer satisfaction
                            and attention to detail, we bring your construction vision to life.</p>
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
                                        <h4 class="ms-3">Commitment to Quality</h4>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-secondary">
                                            <i class="fas fa-users-cog fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">Expert Engineering Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-0 gx-4 justify-content-between pb-4">
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Guaranteed
                                    Satisfaction
                                </p>
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Skilled
                                    Workforce
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Annual
                                    Maintenance
                                    Programs</p>
                                <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Flexible
                                    and
                                    Cost-Effective Solutions</p>
                            </div>
                        </div>
                        <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp"
                            data-wow-delay="0.1s" href="{{ url('service') }}">Learn More</a>
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
                <h2 class="display-4 text-capitalize mb-3">Why Choose Kizuri Holdings</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-city text-primary fa-5x"></i>
                        </div>
                        <a href="#" class="h4 d-block my-4">Expert Engineering Team</a>
                        <p class="mb-0">At Kizuri Holdings, we have a team of experienced and qualified engineers
                            dedicated to delivering excellence in every project.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-funnel-dollar text-primary fa-5x"></i>
                        </div>
                        <a href="#" class="h4 d-block my-4">Free Estimates</a>
                        <p class="mb-0">At Kizuri Holdings, we provide free estimates to our clients, ensuring
                            transparency and trust in our pricing.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item text-center border p-5">
                        <div class="feature-img bg-secondary d-inline-flex p-4">
                            <i class="fas fa-tools text-primary fa-5x"></i>
                        </div>
                        <a href="#" class="h4 d-block my-4">Quality Materials</a>
                        <p class="mb-0">At Kizuri Holdings, we use only the highest quality materials in our
                            construction projects, ensuring durability and longevity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->







    @include('footer')



    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


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

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
    <div class="container-fluid service bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <p class="text-uppercase text-secondary fs-5 mb-0">Our Services</p>
                <h2 class="display-4 text-capitalize mb-3">Quality Construction Services</h2>
            </div>
            <div class="row g-4">
                <!-- Service 1: General Construction -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-1.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <i class="fas fa-home text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">General Construction</a>
                            <p class="text-white mb-4">We provide top-notch general construction services, ensuring
                                quality and efficiency in every project. From residential buildings to commercial
                                complexes, we deliver excellence.</p>
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

                <!-- Service 2: Property Maintenance -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-2.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <i class="fas fa-users-cog text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Property Maintenance</a>
                            <p class="text-white mb-4">Our property maintenance services ensure that your properties
                                remain in top condition. From regular inspections to repairs, we've got you covered.</p>
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

                <!-- Service 3: Project Management -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-3.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <i class="fas fa-hospital-user text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Project Management</a>
                            <p class="text-white mb-4">Our project management services ensure that your projects are
                                completed on time and within budget. From planning to execution, we handle it all
                                efficiently.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ url('about') }}">Read More</a>
                        </div>
                        <div class="service-tytle">
                            <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                <h4>Project Management</h4>
                            </div>
                            <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-hospital-user text-primary fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Virtual Design & Build -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-4.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-file-invoice-dollar text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Virtual Design & Build</a>
                            <p class="text-white mb-4">Our virtual design and build services utilize cutting-edge
                                technology to bring your ideas to life. From conceptualization to implementation, we
                                ensure precision and creativity.</p>
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

                <!-- Service 5: Preconstruction -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-5.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-cogs text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Preconstruction</a>
                            <p class="text-white mb-4">Our preconstruction services lay the foundation for successful
                                projects. From feasibility studies to budgeting, we ensure every aspect is meticulously
                                planned.</p>
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

                <!-- Service 6: Design Build -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-6.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                <i class="fas fa-sitemap text-primary fa-4x"></i>
                            </div>
                            <a href="{{ url('about') }}" class="d-block fs-4 my-4">Design Build</a>
                            <p class="text-white mb-4">Our design build services integrate creativity and functionality
                                to bring your visions to life. From concept to completion, we handle every step with
                                precision and care.</p>
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

                <!-- Button for More Services -->
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-secondary py-3 px-5 mt-4" href="{{ url('about') }}">More Services</a>
                </div>
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

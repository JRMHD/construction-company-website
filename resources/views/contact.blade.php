<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us - Kizuri Holding SAR</title>
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
                    <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('service') }}" class="nav-item nav-link">Services</a>

                    <a href="{{ url('project') }}" class="nav-item nav-link ">Projects</a>
                    <a href="{{ url('blog') }}" class="nav-item nav-link ">Our Blog</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link active">Contact</a>
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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('service') }}">Services</a></li>
                <li class="breadcrumb-item active text-secondary">Contact</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <p class="text-uppercase text-secondary fs-5 mb-0">Let’s Connect</p>
                        <h2 class="display-4 text-capitalize mb-3">Send Your Message</h2>
                        <p class="mb-0">Please fill out the form below to reach us. We'll get back to you as soon as
                            possible.</p>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <input type="phone" class="form-control" id="phone" name="phone"
                                        placeholder="Phone">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <input type="text" class="form-control" id="project" name="project"
                                        placeholder="Project">
                                    <label for="project">Your Project</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating border border-secondary">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating border border-secondary">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message"
                                        style="height: 160px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="contact-map h-100 w-100">
                        <!-- Replace the iframe source with your actual Google Maps embed URL -->
                        <iframe class="h-100 w-100" style="height: 500px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.110872777698!2d15.256792082178922!3d-4.390342835490951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a307c61ce2e1b%3A0x74392a4d3b86b03b!2sAve%20Okito%2C%20Kinshasa%2C%20Democratic%20Republic%20of%20the%20Congo!5e0!3m2!1sen!2ske!4v1717330348326!5m2!1sen!2ske"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
            <div class="row g-5">
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                        <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                        <div>
                            <h4>Address</h4>
                            <!-- Update the address here -->
                            <p class="mb-0">22 Avenue Okito, Q/kiwele - Lubumbashi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                        <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                        <div>
                            <h4>Email</h4>
                            <!-- Update the email address here -->
                            <p class="mb-0">info@kizuriholding.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                        <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                        <div>
                            <h4>Telephone</h4>
                            <!-- Update the telephone number here -->
                            <p class="mb-0">+243 890 299 699</p>
                            <p class="mb-0">+243 821 665 355</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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

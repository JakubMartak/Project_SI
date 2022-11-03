<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/footerstyle.css" rel="stylesheet">
</head>

<body class="gradient-custom">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start

        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
         Spinner End -->
        <!-- Navbar Start -->
        <header>
            @include('parts/loggednavbar')
        </header>
        <!-- Navbar End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded">

                            <div class="col-6 text-start">
                                <img class="img-about" src="https://www.theladders.com/wp-content/uploads/job-interview-long-term-compensation.jpg">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn " data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p><i class="fa fa-check text-success me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-success me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-success me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-success py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
         <!-- Category Start -->
         <div class="container-xxl py-5" id="category">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="listpage">
                            <i class="fa fa-3x bi bi-envelope text-success mb-4"></i>
                            <h6 class="mb-3">Fakulta prírodných vied a informatiky</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
            </div>
        </div>
        <!-- Category End -->
        





        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

        <!-- Footer Start -->
        <footer>
            @include('parts/footer')
        </footer>
        <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/../js/main.js"></script>
    </div>
</body>


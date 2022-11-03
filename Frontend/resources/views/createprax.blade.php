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
    <!-- Job Detail Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gy-5 gx-4">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center mb-5">
                        <img class="flex-shrink-0 img-fluid border rounded" src="https://images-platform.99static.com/3AFC42_lnlms4RS9XnBG72Fl21M=/109x130:909x930/500x500/top/smart/99designs-contests-attachments/88/88112/attachment_88112656" alt="" style="width: 80px; height: 80px;">
                        <div class="text-start ps-4">
                            <h3 class="mb-3">Nová prax</h3>
                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i> -adresa- </span>
                            <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Prax</span>
                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>plat?</span>
                        </div>
                    </div>
                    <from>
                    <div class="mb-5">
                        
                    <h2 class="fw-bold mb-2 text-uppercase">Vytvoriť prax</h2>
                            <div class="cmb-3">
                                <label class="form-label">Popis</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                            </div>
                            <div class="cmb-3">
                                <label for="exampleInputEmail1" class="form-label">Dátum začiatku praxe</label>
                                <input type="date" class="form-control" id="" aria-describedby="emailHelp">
                            </div>
                            <div class="cmb-3">
                                <label for="exampleInputPassword1" class="form-label">Dátum ukončenia praxe</label>
                                <input type="date" class="form-control" id="">
                            </div>
                            
                            <p></p>
                            <button class="btn btn-success w-100" type="submit">Pridať prax</button>
                    </div>
                    <form>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                        <h4 class="mb-4">Job Summary</h4>
                        <p><i class="fa fa-angle-right text-success me-2"></i>Vytvorené dňa: -Today-</p>
                        <p><i class="fa fa-angle-right text-success me-2"></i>Typ práce: Prax</p>
                        <p><i class="fa fa-angle-right text-success me-2"></i>Lokácia: -prázde-</p>
                        <p><i class="fa fa-angle-right text-success me-2"></i>Dátum od: 01 Jan, 2045</p>
                        <p><i class="fa fa-angle-right text-success me-2"></i>Dátum do: 02 Jan, 2045</p>
                    </div>
                    <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                        <h4 class="mb-4">Company Detail</h4>
                        <p class="m-0"> - prázdne- </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Detail End -->





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
</body>


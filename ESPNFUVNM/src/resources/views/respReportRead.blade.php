<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <style>
        <?php //include __DIR__ .'/../css/style.css'; ?>
    </style>
</head>

<body class="gradient-custom">
<div class="container-xxl bg-white p-0">
    <header>
        @include('parts.respnavbar')
    </header>
    <!-- Navbar End -->
    <!-- Jobs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <h6 class="mt-n1 mb-0">Bakalár</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <h6 class="mt-n1 mb-0">Magister</h6>
                        </a>
                    </li>

                </ul>
                <div class="tab-content">

                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <!-- Bakalár -->
                        <?php
                        //use Illuminate\Support\Facades\DB;
                        $praxy = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('Predmety_idPredmety', '=', 1)->get();
                        foreach ($praxy as $prax) {
                            echo"<div class='job-item p-4 mb-4'>"."
                                <div class='row g-4'>"."
                                    <div class='col-sm-12 col-md-8 d-flex align-items-center'>"/*."
                                        <img class='flex-shrink-0 img-fluid border rounded' src='https://images-platform.99static.com/3AFC42_lnlms4RS9XnBG72Fl21M=/109x130:909x930/500x500/top/smart/99designs-contests-attachments/88/88112/attachment_88112656' alt='' style='width: 80px; height: 80px;'>"*/."
                                        <div class='text-start ps-4'>"."
                                            <h5 class='mb-3'>". $prax->Pozicia."</h5>"."
                                            <span class='text-truncate me-3'><i class='fa fa-map-marker-alt text-success me-2'></i>".$prax->Názov_firmy."</span>"."
                                            <span class='text-truncate me-3'><i class='far fa-clock text-success me-2'></i>".$prax->Typ_zmluvy."</span>"/*."
                                            <span class='text-truncate me-0'><i class='far fa-money-bill-alt text-success me-2'></i>$123 - $456</span>".*/."
                                        </div>"."
                                    </div>"."
                                    <div class='col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center'>"."
                                        <div class='d-flex mb-3'>"."
                                            <a class='btn btn-success' href='infopage'>Details</a>"."
                                        </div>"."
                                        <small class='text-truncate'><i class='far fa-calendar-alt text-success me-2'></i>Date Line:". $prax->Datum_start."</small>"."
                                    </div>"."
                                </div>"."
                            </div>";
                        }
                        ?>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <!-- Magister -->
                        <?php
                        //use Illuminate\Support\Facades\DB;
                        $praxy = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('Predmety_idPredmety', '=', 2)->get();
                        foreach ($praxy as $prax) {
                            echo"<div class='job-item p-4 mb-4'>"."
                                <div class='row g-4'>"."
                                    <div class='col-sm-12 col-md-8 d-flex align-items-center'>"/*."
                                        <img class='flex-shrink-0 img-fluid border rounded' src='https://images-platform.99static.com/3AFC42_lnlms4RS9XnBG72Fl21M=/109x130:909x930/500x500/top/smart/99designs-contests-attachments/88/88112/attachment_88112656' alt='' style='width: 80px; height: 80px;'>"*/."
                                        <div class='text-start ps-4'>"."
                                            <h5 class='mb-3'>". $prax->Pozicia."</h5>"."
                                            <span class='text-truncate me-3'><i class='fa fa-map-marker-alt text-success me-2'></i>".$prax->Názov_firmy."</span>"."
                                            <span class='text-truncate me-3'><i class='far fa-clock text-success me-2'></i>".$prax->Typ_zmluvy."</span>"/*."
                                            <span class='text-truncate me-0'><i class='far fa-money-bill-alt text-success me-2'></i>$123 - $456</span>".*/."
                                        </div>"."
                                    </div>"."
                                    <div class='col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center'>"."
                                        <div class='d-flex mb-3'>"."
                                            <a class='btn btn-success' href='infopage'>Details</a>"."
                                        </div>"."
                                        <small class='text-truncate'><i class='far fa-calendar-alt text-success me-2'></i>Date Line:". $prax->Datum_start."</small>"."
                                    </div>"."
                                </div>"."
                            </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jobs End -->
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





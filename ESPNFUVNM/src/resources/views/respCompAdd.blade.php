<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Template Stylesheet */
        <?php //include __DIR__ .'/../css/style.css'; ?>
        /* Customized Bootstrap Stylesheet <link href="css/bootstrap.min.css" rel="stylesheet"> */
    </style>
</head>

<body class="gradient-custom">
<div class="container-xxl bg-white p-0">
    <!-- Navbar Start -->
    <header>
        @include('parts.respnavbar')
    </header>
    <!-- Navbar End -->

    <!-- Container -->
    <div class="container">

        <div class="job-item p-4 mb-4">
            <div class="row g-4">
                <div class="d-flex mb-3">

                </div>
                <!-- Tabulka -->
                <div class="">
                    <div class="text-start ps-4">

                        <table class="table table-w">
                            <thead>
                            <tr>
                                <th scope="col">#id</th>
                                <th scope="col">Názov Firmy</th>
                                <th scope="col">Skratka</th>
                                <th scope="col">Adresa</th>
                                <th scope="col">Mesto</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <form>
                                    <th scope="row">#</th>
                                    <td><input type="text" size="10"> </input></td>
                                    <td><input type="text" size="10"> </input></td>
                                    <td><input type="text" size="10"> </input></td>
                                    <td><input type="text" size="10"> </input></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="respCompList">Add</a>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-danger" href="respCompList">Cancel</a>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- buttons -->

            </div>
        </div>

    </div>


</div>
<!-- Back to Top -->

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




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
    <link href="/css/style.css" rel="stylesheet">

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
        @include('parts.stunavbarforupdate')
    </header>
    <!-- Navbar End -->

    <!-- Container -->
    <div class="container">

        <div class="job-item p-4 mb-4">
            <div class="row g-4">
                <div class="d-flex mb-3">
                    <a class="btn btn-success" href="/stuContReportAdd">Pridať Záznam o vykonaní praxe</a>
                </div>
                <!-- Tabulka -->
                <div class="">
                    <div class="text-start ps-4">
                        <form action="/stuContReportUpd2" method="POST">
                            @csrf
                            <table class="table table-w">
                                <thead>
                                <tr>
                                    <th scope="col">Pozícia</th>
                                    <th scope="col">Názov Firmy</th>
                                    <th scope="col">Typ Zmluvy</th>
                                    <th scope="col">Dátum Začiatku</th>
                                    <th scope="col">Dátum Konca</th>
                                    <th scope="col">Kontaktná Osoba</th>
                                    <th scope="col">Aktuálny stav</th>
                                    <th scope="col">Predmety</th>
                                    <th scope="col">Pracovník FPVaI</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php
                                    foreach ($prax as $pr) echo"<input type='hidden' name='idPrax' value='".$pr->idPrax."'>
                                    <td><input type='text' name='Pozicia' size='8' value='".$pr->Pozicia."'></td>
                                    <td><input type='text' name='Nazov_firmy' size='8' value='".$pr->Firma_idFirma."'></td>
                                    <td><input type='text' name='Typ_Zmluvy' size='8' value='".$pr->Zmluva_idZmluva."'></td>
                                    <td><input type='text' name='Datum_Zaciatku' size='8' value='".$pr->Datum_start."'></td>
                                    <td><input type='text' name='Datum_Konca' size='8' value='".$pr->Datum_end."'></td>
                                    <td><input type='text' name='Kontaktna_Osoba' size='8' value='".$pr->Kontaktna_osoba_idPouzivatel."'></td>
                                    <td><input type='text' name='Aktualny_stav' size='8' value='".$pr->Aktuálny_stav."'></td>
                                    <td><input type='text' name='Predmety' size='8' value='".$pr->Predmety_idPredmety."'></td>
                                    <td><input type='text' name='Pracovnik_FPVaI' size='8' value='".$pr->Pracovnik_FPVaI_idPouzivatel."'></td>
                                    <td>
                                        <div class='d-flex mb-3'>
                                            <button type='submit' class='btn btn-primary'>Confirm</button>
                                        </div>
                                    </td>

                                    <td>
                                        <div class='d-flex mb-3'>
                                            <a class='btn btn-danger' href='/stuCompreportList'>Cancel</a>
                                        </div>
                                    </td>"
                                    ?>
                                </tr>
                                </tbody>
                            </table>
                        </form>

                    </div>
                </div>

                <!-- buttons -->

            </div>
        </div>

    </div>


</div>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- Footer Start -->
<footer>
    @include('parts.footerforupdate')
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




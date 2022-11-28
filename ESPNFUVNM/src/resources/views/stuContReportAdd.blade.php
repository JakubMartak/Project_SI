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
        @include('parts.stunavbar')
    </header>
    <!-- Navbar End -->

    <!-- Container -->
    <div class="container">

        <div class="job-item p-4 mb-4">
            <div class="row g-4">
                <!-- Tabulka -->
                <div class="">
                    <div class="text-start ps-4">
                        <form action="stuContReportSave" method="POST">
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
                                <td><input type="text" name="Pozicia" size="8"></td>
                                <td>
                                    <select name="Nazov_firmy" id="Nazov_firmy" style="width: 100px;">
                                        <?php
                                        $firmy = DB::table('Firma')->get();
                                        foreach ($firmy as $firma){
                                            echo "<option value='".$firma->idFirma."'>".$firma->Názov_firmy."</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="Typ_Zmluvy" id="Typ_Zmluvy" style="width: 100px;">
                                        <?php
                                        $zmluvy = DB::table('Zmluva')->get();
                                        foreach ($zmluvy as $zmluva){
                                            echo "<option value='".$zmluva->idZmluva."'>".$zmluva->Typ_zmluvy."</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input type="date" id="Datum_Zaciatku" name="Datum_Zaciatku"
                                           style="width: 110px;" value=<?php echo date('Y-m-d');?> ></td>
                                <td><input type="date" id="Datum_Konca" name="Datum_Konca"
                                           style="width: 110px;" value=<?php echo date('Y-m-d');?> ></td>
                                <td>
                                    <select name="Kontaktna_Osoba" id="Kontaktna_Osoba">
                                        <?php
                                        $osoby = DB::table('Pouzivatel')->where('Rola_pouzivatela', "3")->get();
                                        foreach ($osoby as $osoba){
                                            echo "<option value='".$osoba->idPouzivatel."'>".$osoba->Meno." ".$osoba->Priezvisko."</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input type="text" name="Aktualny_stav" size="8"></td>
                                <td>
                                    <select name="Predmety" id="Predmety">
                                        <?php
                                        $predmety = DB::table('Predmety')->get();
                                        foreach ($predmety as $predmet){
                                            echo "<option value='".$predmet->idPredmety."'>".$predmet->Nazov."</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="Pracovnik_FPVaI" id="Pracovnik_FPVaI">
                                        <?php
                                        $osoby = DB::table('Pouzivatel')->where('Rola_pouzivatela', "2")->get();
                                        foreach ($osoby as $osoba){
                                            echo "<option value='".$osoba->idPouzivatel."'>".$osoba->Meno." ".$osoba->Priezvisko."</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <div class="d-flex mb-3">
                                        <button type="submit" class="btn btn-primary">Pridať</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-danger" href="stuContReportList">Zrušiť</a>
                                    </div>
                                </td>
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
    @include('parts.footer')
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




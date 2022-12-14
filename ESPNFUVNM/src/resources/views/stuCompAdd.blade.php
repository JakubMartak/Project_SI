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
        <?php
        //$firmy = DB::table('Firma')->join('Mesto', 'Mesto.idMesto', '=', 'Firma.Mesto_idMesto')->orderBy('idFirma')->get();
        ?>
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
                            <?php
                            foreach ($firmy as $firma) {
                                echo"<tr>"."
                                <th scope='row'>".$firma->idFirma."</th>"."
                                <td>".$firma->Názov_firmy."</td>"."
                                <td>".$firma->Skratka."</td>"."
                                <td>".$firma->Adresa."</td>"."
                                <td>".$firma->Nazov."</td>"."
                                <td>
                                    <div class='d-flex mb-3'>
                                        <a class='btn btn-primary' href='stuCompUpd/".$firma->idFirma."'>Editovať</a>
                                    </div>
                                </td>
                                <td>
                                    <div class='d-flex mb-3'>
                                        <a class='btn btn-danger' href='stuCompDel/".$firma->idFirma."'>Odstrániť</a>
                                    </div>
                                </td>"."
                            </tr>";
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tabulka -->
                <div class="">
                    <div class="text-start ps-4">
                        <form action="stuCompSave" method="POST">
                            @csrf
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
                                    <th scope="row">#</th>
                                    <td><input type="text" name="Nazov_firmy" size="10"></td>
                                    <td><input type="text" name="Skratka" size="10"></td>
                                    <td><input type="text" name="Adresa" size="10"></td>
                                    <td>
                                        <select name="Nazov" id="Nazov">
                                            <?php
                                            $mesta = DB::table('Mesto')->get();
                                            foreach ($mesta as $mesto){
                                                echo "<option value='".$mesto->idMesto."'>".$mesto->Nazov."</option>";
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
                                            <a class="btn btn-danger" href="stuPracList">Zrušiť</a>
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




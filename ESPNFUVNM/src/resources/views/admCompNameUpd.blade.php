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
        @include('parts.admnavbarforupdate')
    </header>
    <!-- Navbar End -->

    <!-- Container -->
    <div class="container">

        <div class="job-item p-4 mb-4">
            <div class="row g-4">
                <p></p>
                <!-- Tabulka -->
                <div class="">
                    <div class="text-start ps-4">
                        <form action="/admCompNameUpd2" method="POST">
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
                                <?php

                                foreach ($firma as $fr) {
                                    $mesta = DB::table('Mesto')->where('idMesto', $fr->Mesto_idMesto)->get();
                                    echo "<th scope='row'>" . $fr->idFirma . "</th>
                                    <input type='hidden' name='idFirma' value='" . $fr->idFirma . "'>
                                    <td><input type='text' name='Nazov_firmy' size='20' value='" . $fr->Názov_firmy . "'></td>
                                    <td>" . $fr->Skratka . "</td>
                                    <td>" . $fr->Adresa . "</td>
                                    <td>";
                                }
                                foreach ($mesta as $mesto){
                                    echo $mesto->Nazov;
                                }
                                echo"</td>
                                    <td>
                                        <div class='d-flex mb-3'>
                                            <button type='submit' class='btn btn-primary'>Potvrdiť</button>
                                        </div>
                                    </td>

                                    <td>
                                        <div class='d-flex mb-3'>
                                            <a class='btn btn-danger' href='/admCompList'>Zrušiť</a>
                                        </div>
                                    </td>";
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
    @include('parts/footerforupdate')
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




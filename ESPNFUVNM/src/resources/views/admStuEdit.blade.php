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
    <link href="/css/footerstyle.css" rel="stylesheet">

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

                <!-- Tabulka -->
                <div class="">
                    <div class="text-start ps-4">
                        <form action="/admStuEdit2" method="POST">
                            @csrf
                            <table class="table table-w">
                                <thead>
                                <tr>
                                    <th scope="col">#id</th>
                                    <th scope="col">Meno</th>
                                    <th scope="col">Priezvisko</th>
                                    <th scope="col">Cislo</th>
                                    <th scope="col">e-mail</th>
                                    <th scope="col">Rola</th>
                                    <th scope="col">Firma</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr><?php
                                    foreach ($osoba as $os) echo"
                                    <th scope='row'>".$os->idPouzivatel."</th>
                                    <input type='hidden' name='idPouzivatel' value='".$os->idPouzivatel."'>
                                    <td><input type='text' name='Meno' size='10' value='".$os->Meno."'></td>
                                    <td><input type='text' name='Priezvisko' size='10' value='".$os->Priezvisko."'></td>
                                    <td><input type='text' name='Cislo' size='10' value='".$os->Cislo."'></td>
                                    <td><input type='text' name='Mail' size='30' value='".$os->Mail."'></td>
                                    <td><select name='Rola' id='Rola' style='width: 150px;'>";
                                    $role = DB::table('Rola')->get();
                                    foreach ($role as $rola){
                                        echo "<option value='".$rola->idRola."'>".$rola->Rola."</option>";
                                    }
                                    echo"</select></td>
                                    <td><select name='Firma' id='Firma' style='width: 150px;'>
                                        <option value='0'></option>";
                                    $firmy = DB::table('Firma')->get();
                                    foreach ($firmy as $firma){
                                        echo "<option value='".$firma->idFirma."'>".$firma->N??zov_firmy."</option>";
                                    }
                                    echo"</select></td>
                                    <td>
                                        <div class='d-flex mb-3'>
                                            <button type='submit' class='btn btn-primary'>Confirm</button>
                                        </div>
                                    </td>

                                    <td>
                                        <div class='d-flex mb-3'>
                                            <a class='btn btn-danger' href='/admStuLIst'>Cancel</a>
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
</div>



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




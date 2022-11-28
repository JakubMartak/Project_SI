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
        @include('parts.cmpnavbar')
    </header>
    <!-- Navbar End -->

    <!-- Container -->
    <div class="container">

        <div class="job-item p-4 mb-4">
            <div class="row g-4">


                <form action="cmpAdd" method="POST">
                    @csrf
                    <h2 class="fw-bold mb-2 text-uppercase flex items-center justify-center">Register</h2>
                    <div>
                        <label for="Nazov_firmy" class="">Názov firmy</label>
                        <br>
                        <input id="Nazov_firmy" class="block mt-1 w-full" type="text" name="Nazov_firmy" required autofocus />
                    </div>

                    <div class="mt-4">
                        <label for="Skratka" class="">Skratka</label>
                        <br>
                        <input id="Skratka" class="block mt-1 w-full" type="text" name="Skratka" required />
                    </div>

                    <div class="mt-4">
                        <label for="Adresa" class="">Adresa</label>
                        <br>
                        <input id="Adresa" class="block mt-1 w-full" type="text" name="Adresa" required />
                    </div>

                    <div class="mt-4">
                        <label for="Mesto" class="">Mesto</label>
                        <br>
                        <select name="Nazov" id="Nazov">
                            <?php
                            $mesta = DB::table('Mesto')->get();
                            foreach ($mesta as $mesto){
                                echo "<option value='".$mesto->idMesto."'>".$mesto->Nazov."</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="btn-success btn-lg px-5 ml-4">
                            Registrovať
                        </button>
                        <a class='btn-success btn-lg px-5 ml-4' href='cmpUpd'>Editovať</a>
                    </div>
                </form>

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




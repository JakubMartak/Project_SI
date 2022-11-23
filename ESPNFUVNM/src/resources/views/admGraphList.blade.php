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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <style>
        /* Template Stylesheet */
        <?php //include __DIR__ .'/../css/style.css'; ?>
        /* Customized Bootstrap Stylesheet <link href="css/bootstrap.min.css" rel="stylesheet"> */

        .grid-container {
            display: grid;
            grid-template-columns: auto auto;
        }

    </style>
</head>

<body class="gradient-custom">
<div class="container-xxl bg-white p-0">
    <!-- Navbar Start -->
    <header>
        @include('parts.admnavbar')
    </header>
    <!-- Navbar End -->

    <!-- Container -->
    <div class="container">

        <div class="job-item p-4 mb-4">

            <div class="grid-container">
                <div class="grid-item"><canvas id="myChart" style="width:100%;max-width:600px"></canvas></div>
                <div class="grid-item"><canvas id="myChart1" style="width:100%;max-width:300px;max-height: 300px"></canvas></div>
                <div class="grid-item">3</div>
                <div class="grid-item">4</div>

            </div>

            <script>
                var xValues = ["Italy", "FRance", "Spain", "USA", "Argentina"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = ["red", "green","blue","orange","brown"];

                new Chart("myChart", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {display: false},
                        title: {
                            display: true,
                            text: "World Wine Production 2018"
                        }
                    }
                });
            </script>

            <script>
                var aValues = ["Italy", "France", "sPain", "USA", "Argentina"];
                var bValues = [55, 49, 44, 24, 15];
                var barColors = [
                    "#b91d47",
                    "#00aba9",
                    "#2b5797",
                    "#e8c3b9",
                    "#1e7145"
                ];

                new Chart("myChart1", {
                    type: "pie",
                    data: {
                        labels: aValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: bValues
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "World Wide Wine Production 2018"
                        }
                    }
                });
            </script>





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




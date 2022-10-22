<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <style>
        /* Customized Bootstrap Stylesheet <link href="css/bootstrap.min.css" rel="stylesheet"> */
        <?php include __DIR__ .'/../css/bootstrap.min.css'; ?>
        <?php include __DIR__ .'/../css/footerstyle.css'; ?>
    </style>

</head>

<section class="">
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <!-- Prihlásený/neprihlásený používatel -->
            <ul class="navbar-nav me-right mb-2 mb-md-0">
                <img class="flex-shrink-0 img-fluid border rounded" src="resources/img/testimonial-1.jpg" alt="Pic" style="width: 30px; height: 30px;">
                <a class="nav-link active" href="login.php" >Login</a>
            </ul>
        </div>
    </div>
</nav>
</section>


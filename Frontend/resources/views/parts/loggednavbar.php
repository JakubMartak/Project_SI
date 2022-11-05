<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <style>
        /* Customized Bootstrap Stylesheet <link href="css/bootstrap.min.css" rel="stylesheet"> */
        <?php include __DIR__ .'/../css/bootstrap.min.css'; ?>
        <?php include __DIR__ .'/../css/footerstyle.css'; ?>
    </style>

</head>



<section class="">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="myinfopage.php">Moja Prax</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Category</a>
                    </li>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Zoznam praxí</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="listpage.php" class="dropdown-item">Katedra informatiky</a>
                        </div>
                    </div>
                </ul>
                <!-- Prihlásený/neprihlásený používatel -->
                <ul class="navbar-nav me-right mb-2 mb-md-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pouzivatel</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="profilepage.php" class="dropdown-item">Profil</a>
                            <a href="login.php" class="dropdown-item">logout</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</section>


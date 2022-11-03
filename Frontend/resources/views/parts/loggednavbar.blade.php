<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footerstyle.css" rel="stylesheet">
    <style>
        /* Customized Bootstrap Stylesheet <link href="css/bootstrap.min.css" rel="stylesheet"> */
        <?php //include __DIR__ .'/../css/bootstrap.min.css'; ?>
        <?php //include __DIR__ .'/../css/footerstyle.css'; ?>
    </style>

</head>

<section class="">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="myinfopage">Moja Prax</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Zoznam praxí</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="listpage" class="dropdown-item">Katedra informatiky</a>
                        </div>
                    </div>
                    
                </ul>

                <!-- Prihlásený/neprihlásený používatel -->
                <ul class="navbar-nav me-right mb-2 mb-md-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pouzivatel</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="profilepage" class="dropdown-item">Profil</a>
                            <a href="createprax" class="dropdown-item">Vytvoriť prax (firma)</a>
                            <a href="login" class="dropdown-item">logout</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</section>


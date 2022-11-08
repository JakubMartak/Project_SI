<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footerstyle.css" rel="stylesheet">
</head>

<section class="">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Fixed navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="category.php #category">Category</a>
                    </li>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Zoznam praxí</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="listpage.php" class="dropdown-item">Fakulta prírodných vied a informatiky</a>
                            <a href="listpage.php" class="dropdown-item">Fakulta sociálnych vied a zdravotníctva</a>
                            <a href="listpage.php" class="dropdown-item">Fakulta stredoeurópskych študií</a>
                            <a href="listpage.php" class="dropdown-item">Filozofická fakulta</a>
                            <a href="listpage.php" class="dropdown-item">pedagogická fakulta</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="myinfopage.php">Moja Prax</a>
                    </li>
                </ul>
                <!-- Prihlásený/neprihlásený používatel -->
                <ul class="navbar-nav me-right mb-2 mb-md-0">
                    <img class="flex-shrink-0 img-fluid border rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="Pic" style="width: 30px; height: 30px;">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Používatel</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="profilepage" class="dropdown-item">Profil</a>
                            <a href="login" class="dropdown-item">logout</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</section>


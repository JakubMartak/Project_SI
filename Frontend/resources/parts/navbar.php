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
        <a class="navbar-brand" href="index.php">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">

            </ul>
            <!-- Prihlásený/neprihlásený používatel -->
            <ul class="navbar-nav me-right mb-2 mb-md-0">
                <img class="flex-shrink-0 img-fluid border rounded" src="" alt="Pic" style="width: 30px; height: 30px;">
                <a class="nav-link active" href="login.php" >Neprihlásený</a>
            </ul>
        </div>
    </div>
</nav>
</section>


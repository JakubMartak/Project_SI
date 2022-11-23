<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<section class="">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <!--Tlačidlo na zobrazenie student-->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="stuPracList">Student zobrazenie</a>
                    </li>

                    <!--Tlačidlo na zobrazenie veduci pracoviska-->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="headCompList">Veduci pracoviska</a>
                    </li>

                    <!--Tlačidlo na zobrazenie admin-->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admStuLIst">Admin zobrazenie</a>
                    </li>
                    <!--Tlačidlo na zobrazenie poverený pracovník  pracoviska -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="respCompList">poverený pracovník zobrazenie</a>
                    </li>
                    <!--Tlačidlo na zobrazenie Zástupca firmy a organizácie -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cmpRegDetail">Zástupca firmy a organizácie zobrazenie</a>
                    </li>


                </ul>
                <!-- Prihlásený/neprihlásený používatel -->
                <ul class="navbar-nav me-right mb-2 mb-md-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu rounded-0 m-0">



                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a :href="route('logout')"
                                   onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdown-item" >Log Out</a>
                            </form>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</section>


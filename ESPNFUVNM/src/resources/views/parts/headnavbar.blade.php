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
                    <!--Tlačidlo Zoznam praxí, ktoré smeruje na dashboard-->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="headCompList">Zoznam firiem a organizácií</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="headStudList">Zoznam študentov na praxi podľa odborov</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="headPracList">Aktuálny stav praxe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="headPracFinishList">Zoznam schválených a ukončených praxí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="headReportList">Report za pracovisko</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="headFeedRead">Spätná väzba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="headCertList">Zoznam osvedčení</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="headRespList">Poverení pracovníci pracoviska</a>
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
                                                this.closest('form').submit();" class="dropdown-item" >Odhlásiť sa</a>
                            </form>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</section>


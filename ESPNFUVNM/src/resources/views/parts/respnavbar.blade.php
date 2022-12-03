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
                        <a class="nav-link active" aria-current="page" href="respCompList">Zoznam firiem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="respPracRead">Zoznam praxí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="respReportRead">Vytváranie reportov</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="respStuRatingList">Hodnotenie študentov</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="respPracArchRead">Archív</a>
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


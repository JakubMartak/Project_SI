<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <!-- Redirect -->
    <?php
    use Illuminate\Support\Facades\Session;
    $id = 0;
    $f = 0;
    $rola = DB::table('Pouzivatel')->select('Rola_pouzivatela', 'Firma_idFirma')->where('idPouzivatel',Auth::id())->get();
    foreach ($rola as $r){
        $id = $r->Rola_pouzivatela;
        $f = $r->Firma_idFirma;
    }
    //$request->session()->put('role', $id);
    Session::put('role', $id);
    if ($f == null) Session::put('firma', "null");
    else Session::put('firma', $f);
    if (Session::get('role') == 1) echo "<meta http-equiv='refresh' content= '0; stuPracList' />";
    if (Session::get('role') == 2) echo "<meta http-equiv='refresh' content= '0; respCompList' />";
    if (Session::get('role') == 3) echo "<meta http-equiv='refresh' content= '0; cmpRegDetail' />";
    if (Session::get('role') == 4) echo "<meta http-equiv='refresh' content= '0; headCompList' />";
    if (Session::get('role') == 5) echo "<meta http-equiv='refresh' content= '0; admStuLIst' />";
    ?>


    <style>
        <?php //include __DIR__ .'/../css/style.css'; ?>
    </style>
</head>

<body class="gradient-custom">
<header>
{{--    @include('parts.tempnavbar')--}}
</header>
<!-- Profile Container -->
<div class="container emp-profile">
    <!-- oznámenie -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Ste prihlásený!
                <?php
                //echo "Vaša firma: ".Session::get('firma');
                if (Session::get('role') == 1) echo "<p>Prosím, počkajte na presmerovanie: <a href='stuPracList'>sem</a>.</p>";
                if (Session::get('role') == 2) echo "<p>Prosím, počkajte na presmerovanie: <a href='respCompList'>sem</a>.</p>";
                if (Session::get('role') == 3) echo "<p>Prosím, počkajte na presmerovanie: <a href='cmpRegDetail'>sem</a>.</p>";
                if (Session::get('role') == 4) echo "<p>Prosím, počkajte na presmerovanie: <a href='headCompList'>sem</a>.</p>";
                if (Session::get('role') == 5) echo "<p>Prosím, počkajte na presmerovanie: <a href='admStuLIst'>sem</a>.</p>";
                ?>
            </div>
        </div>
    </div>
</div>
</body>





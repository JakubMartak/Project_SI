<head>
    <link href="css/style.css" rel="stylesheet">
<style>
    <?php //include __DIR__ .'/../css/style.css'; ?>
</style>

</head>

<header>
    @include('parts/navbar')
    <?php //include_once __DIR__ . '/../parts/navbar.php'; ?>
</header>

<body class="gradient-custom">
<?php
 //   use Illuminate\Database\Capsule\Manager as DB;
   // if(DB::connection()->getPDO()){
     //   echo "success";
//}
  //  else {
    //    echo "fail";
    //}
?>
<section>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <div class="cmb-4">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="cmb-4">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <p></p>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                        </div>

                        <div>
                            <p class="mb-0">Don't have an account? <a href="register" class="text-white-50 fw-bold">Sign Up</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>

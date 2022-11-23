<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Template Stylesheet */
        <?php //include __DIR__ .'/../css/style.css'; ?>
        /* Customized Bootstrap Stylesheet <link href="css/bootstrap.min.css" rel="stylesheet"> */
    </style>
</head>

<body class="gradient-custom">
<div class="container-xxl bg-white p-0">
    <!-- Navbar Start -->
    <header>
        @include('parts.cmpnavbar')
    </header>
    <!-- Navbar End -->

    <!-- Container -->
    <div class="container">

        <div class="job-item p-4 mb-4">
            <div class="row g-4">


                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="fw-bold mb-2 text-uppercase flex items-center justify-center">Register</h2>
                    <!-- Name -->
                    <div>
                        <label for="name" class="form-label cmb-4">Meno</label>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email" class="form-label cmb-4">Email</label>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="form-label cmb-4">Password</label>
                        <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="form-label cmb-4">Confirm Password</label>
                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                      type="password"
                                      name="password_confirmation" required />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline form-text hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button class="btn btn-outline-light btn-lg px-5 ml-4">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>


</div>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- Footer Start -->
<footer>
    @include('parts/footer')
</footer>
<!-- Footer End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="/../js/main.js"></script>
</body>




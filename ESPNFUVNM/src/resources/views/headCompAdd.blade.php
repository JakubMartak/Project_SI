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

{{--ZACIATOK--}}
{{--<form method='post' action='/save'>

    <!-- Message -->
    @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
    @endif

    <!-- Add/List records -->
    <table border='1' style='border-collapse: collapse;'>
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
        <tr>
            <td colspan="4">{{ csrf_field() }}</td>
        </tr>
        <!-- Add -->
        <tr>
            <td><input type='text' name='username'></td>
            <td><input type='text' name='name'></td>
            <td><input type='email' name='email'></td>
            <td><input type='submit' name='submit' value='Add'></td>
        </tr>

        <!-- List -->
        @foreach($userData['data'] as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href='/{{ $user->id }}'>Update</a> <a href='/deleteUser/{{ $user->id }}'>Delete</a></td>
            </tr>
        @endforeach
    </table>
</form>

<!-- Edit -->
@if($userData['edit'])
    <form method='post' action='/save'>
        <table>
            <tr>
                <td colspan='2'><h1>Edit record</h1></td>
            </tr>
            <tr>
                <td colspan="2">{{ csrf_field() }}</td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type='text' name='uname' readonly value='{{ $userData["editData"]->username }}' ></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type='text' name='name' value='{{ $userData["editData"]->name }}'></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type='email' name='email' value='{{ $userData["editData"]->email }}' ></td>
            </tr>
            <tr>
                <td>&nbsp;<input type='hidden' value='{{ $userData["edit"] }}' name='editid'></td>
                <td><input type='submit' name='submit' value='Submit'></td>
            </tr>
        </table>
    </form>
@endif--}}

{{--KONIEC--}}



<div class="container-xxl bg-white p-0">
    <!-- Navbar Start -->
    <header>
        @include('parts.respnavbar')
    </header>
    <!-- Navbar End -->

    <!-- Container -->
    <div class="container">

        <div class="job-item p-4 mb-4">
            <div class="row g-4">
                <div class="d-flex mb-3">

                </div>
                <!-- Tabulka -->
                <div class="">
                    <div class="text-start ps-4">

                        <table class="table table-w">
                            <thead>
                            <tr>
                                <th scope="col">#id</th>
                                <th scope="col">Názov Firmy</th>
                                <th scope="col">Skratka</th>
                                <th scope="col">Adresa</th>
                                <th scope="col">Mesto</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <form method="post" action="{{route('headCompSave')}}">
                                    <th scope="row">#</th>
                                    <td><input type="text" size="10" name="nazov_firmy"></td>
                                    <td><input type="text" size="10" name="skratka"></td>
                                    <td><input type="text" size="10" name="adresa"></td>
                                    <td><input type="text" size="10" name="mesto"></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="headReportList">Add</a>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-danger" href="respCompList">Cancel</a>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- buttons -->

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




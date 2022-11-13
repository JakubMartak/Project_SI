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
    <meta http-equiv="refresh" content="3; stuPracList" />

    <style>
        <?php //include __DIR__ .'/../css/style.css'; ?>
    </style>
</head>

<body class="gradient-custom">
<header>
    @include('parts.tempnavbar')
</header>
<!-- Profile Container -->
<div class="container emp-profile">
    <!-- oznámenie -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                You're logged in!

                <p>Please wait for redirect or follow <a href="stuPracList">this link</a>.</p>
            </div>
        </div>
    </div>
</div>
</body>





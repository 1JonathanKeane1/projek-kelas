<!DOCTYPE html>
<html>

<head>
    <!-- meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Kelas.com</title>

    <!-- icon -->
    <link href="/assets/landing/img/Logo kelas for business_landscape 2 2.png" rel="icon">

    <!-- css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/landing/css/style.css">

</head>

<body>

    @include('landing/layout/navbar')

    @yield('content')

    @include('landing/layout/footer')


    <!-- script -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>
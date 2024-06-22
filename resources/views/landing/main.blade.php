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
    <link rel="stylesheet" href="/assets/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/landing/css/style.css">

</head>

<body>

    @include('landing/layout/navbar')

    @include('/landing/partial/alert')

    @yield('content')

    @include('landing/layout/footer')

    @include('landing/modal/login')

    @auth
        @include('landing/modal/pembelian')
    @endauth


    <!-- script -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery-3.3.1.min.js"></script>

</body>

</html>
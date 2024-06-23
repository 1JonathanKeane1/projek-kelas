<!DOCTYPE html>
<html>

<head>
    <!-- meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- title -->
    <title>Kelas Center - Admin</title>

    <!-- icon -->
    <link href="/assets/landing/img/Logo kelas for business_landscape 2 2.png" rel="icon">

    <!-- css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
    <link rel="stylesheet" href="/assets/css/admin/style.css">

</head>

<body>

    @include('admin/layout/sidebar')

    <div class="main-content">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
        <div>

            @include('admin/layout/footer')


            <!-- script -->
            <script src="/assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>
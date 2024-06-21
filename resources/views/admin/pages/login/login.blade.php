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
    <link rel="stylesheet" href="/assets/css/admin/style.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('loginError'))
                <p class="text-danger text-center">{{ session('loginError') }}</p>
                @endif
                <div class="login-form">
                    <h2 class="text-center mb-4">Login</h2>
                    <form action="/admin/login" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                            @error('password')
                            <div class="invalid-feedback">Please enter your password!</div>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
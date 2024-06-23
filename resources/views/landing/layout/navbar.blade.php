<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="/assets/landing/img/Logo kelas for business_landscape 2 2.png" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#benefit">Benefit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#paket">Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kelas">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak Kami</a>
                </li>
            </ul>

            <div class="d-flex">
                <a class="btn btn-fill me-2" href="#">Ajukan Demo</a>
                @auth
                <div class="dropdown">
                    <button class="btn btn-holo dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Halo, {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/user/kelas">Kelas</a></li>
                        <li><a class="dropdown-item" href="/user/logout">Keluar</a></li>
                    </ul>
                </div>
                @else
                <a class="btn btn-holo" data-bs-toggle="modal" data-bs-target="#authModal" type="button">Masuk</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
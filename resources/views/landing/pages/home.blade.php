@extends('/landing/main')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-center bg-light hero-section mb-5">
    <div class="container hero overlay">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Tingkatkan Peforma Bisnis Anda</h1>
                <p>Kami menawarkan solusi terbaik untuk bisnis Anda</p>
                <p>
                    <a href="#" class="btn btn-fill my-2">Ajukan Demo</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="partner mt-3 mb-4">
    <div class="container-fluid">
        <h2 class="text-center">Telah Dipercaya oleh 10.000+ Profesional dari</h2>
        <div class="row d-none d-md-flex justify-content-center flex-wrap">
            <div class="col-auto logo-partner">
                <img src="/assets/landing/img/partner/IEG.png" alt="IEG">
            </div>
            <div class="col-auto logo-partner">
                <img src="/assets/landing/img/partner/Indonesia Entertainmen.png" alt="Indonesia Entertainmen">
            </div>
            <div class="col-auto logo-partner">
                <img src="/assets/landing/img/partner/Sctv.png" alt="Sctv">
            </div>
            <div class="col-auto logo-partner">
                <img src="/assets/landing/img/partner/Sicepat.png" alt="Sicepat">
            </div>
            <div class="col-auto logo-partner">
                <img src="/assets/landing/img/partner/IdcloudHost.png" alt="IdcloudHost">
            </div>
            <div class="col-auto logo-partner">
                <img src="/assets/landing/img/partner/Adirect.png" alt="Adirect">
            </div>
            <div class="col-auto logo-partner">
                <img src="/assets/landing/img/partner/Volta.png" alt="Volta">
            </div>
        </div>

        <div id="logoCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel items for mobile -->
                <div class="carousel-item active">
                    <div class="logo-item">
                        <img src="/assets/landing/img/partner/IEG.png" alt="IEG">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="logo-item">
                        <img src="/assets/landing/img/partner/Indonesia Entertainmen.png" alt="Indonesia Entertainmen">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="logo-item">
                        <img src="/assets/landing/img/partner/Sctv.png" alt="Sctv">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="logo-item">
                        <img src="/assets/landing/img/partner/Sicepat.png" alt="Sicepat">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="logo-item">
                        <img src="/assets/landing/img/partner/IdcloudHost.png" alt="IdcloudHost">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="logo-item">
                        <img src="/assets/landing/img/partner/Adirect.png" alt="Adirect">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="logo-item">
                        <img src="/assets/landing/img/partner/Volta.png" alt="Volta">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#logoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#logoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section class="benefit" id="benefit">
    <div class="container mb-4">
        <div class="row mb-2">
            <h2 class="text-center mb-2">Bagaimana Kelas Center Membantu Anda</h2>
            <p class="text-center">Kami menghadirkan platform pembelajaran yang komprehensif untuk memberdayakan
                karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
        </div>
        <div class="row mt-3">
            <ul class="nav nav-pills justify-content-center">
                @foreach($benefit as $b)
                <li class="nav-item">
                    <a class="nav-link custom-nav-link @if ($loop->first) active @endif" id="{{ $b->id }}-tab" data-bs-toggle="tab"
                        data-bs-target="#{{ $b->id }}" role="tab">{{ $b->benefit }}</a>
                </li>
                @endforeach
            </ul>
            <div class="tab-content mt-4 mb-5" id="myTabContent">
                @foreach ($benefit as $ben )
                <div class="tab-pane fade @if ($loop->first) show active @endif" id="{{ $ben->id }}" role="tabpanel"
                    aria-labelledby="{{ $b->id }}-tab">
                    <div class="row">
                        <div class="col-md">
                            @foreach($ben->detail as $index => $det)
                            @if($index == 0)
                            <h3>{{ $det->judul }}</h3>
                            <p>{{ $det->isi }}</p>
                            @else
                            <p class="benefit-head ps-3"><i class="bi bi-check2 pe-2"
                                    style="color: green;"></i>{{ $det->judul }}</p>
                            <p>{{ $det->isi }}</p>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-md">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="paket" id="paket">
    <div class="container mt-5 mb-3 ">
        <h3 class="text-center mb-4 mt-2">Pilihan Paket Untuk Perusahaan di Kelas Center</h3>
        <div class="row mb-2 d-none d-md-flex">
            @foreach ($paket as $p)
            <div class="col">
                <div class="card card-paket">
                    <div class="card-body">
                        <h5 class="card-title"><Strong><i class="bi bi-lightbulb pe-2"></i>{{ $p->paket }}</strong></h5>
                        <p class="kelebihan">Kelebihan</p>
                        @foreach ($p->detailpaket as $det)
                        <p class="card-text"><i class="bi bi-check-circle-fill pe-2"></i>{{ $det->isi }}</p>
                        @endforeach
                        <hr style="border-top: 1px dashed black">
                        <p>Rp{{ $p->harga_lama }}</p>
                        <p><strong class="harga">Rp{{ $p->harga }}</strong>/bulan</p>
                        @auth
                        <button type="button" class="btn btn-paket" data-bs-toggle="modal"
                            data-bs-target="#beliModal{{ $p->paket->id }}">
                            Pilih Paket
                        </button>
                        @else
                        <a class="btn btn-paket" data-bs-toggle="modal" data-bs-target="#authModal"
                            type="button">Pilih Paket</a>
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div id="cardCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($paket as $index => $p)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title"><Strong><i class="bi bi-lightbulb pe-2"></i>{{ $p->paket }}</strong></h5>
                        <p class="kelebihan">Kelebihan</p>
                        @foreach ($p->detailpaket as $det)
                        <p class="card-text"><i class="bi bi-check-circle-fill pe-2"></i>{{ $det->isi }}</p>
                        @endforeach
                        <hr style="border-top: 1px dashed black">
                        <p>{{ $p->harga_lama }}</p>
                        <p><strong class="harga">{{ $p->harga }}</strong>/bulan</p>
                        @auth
                        <button type="button" class="btn btn-paket" data-bs-toggle="modal"
                            data-bs-target="#beliModal{{ $p->paket->id }}">
                            Pilih Paket
                        </button>
                        @else
                        <a class="btn btn-paket" data-bs-toggle="modal" data-bs-target="#authModal"
                            type="button">Pilih Paket</a>
                        @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container enterprise-bar">
        <div class="text"><i class="bi bi-buildings pe-3"></i>Enterprise</div>
        <div class="text"><i class="bi bi-check-circle-fill pe-2"></i>>100 users <i class="bi bi-check-circle-fill pe-2"></i>All Access Class <i class="bi bi-check-circle-fill pe-2"></i>More Features</div>
        <a href="" class="contact-button">Contact Us</a>
    </div>
</section>

<section class="video" id="kelas">
    <div class="container mt-4">
        <h3 class="text-center">Lebih dari 2000+ Learning Video</h3>
        <p class="text-center">Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat
            oleh
            tim kurikulum profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi</p>

        <div class="row">
            <ul class="nav nav-pills justify-content-center">
                @foreach($kelas as $k)
                <li class="nav-item">
                    <a class="nav-link custom-nav-link @if ($loop->first) active @endif" id="{{ $k->id }}-tab" data-bs-toggle="tab"
                        data-bs-target="#{{ $k->nama }}" role="tab">{{ $k->nama }}</a>
                </li>
                @endforeach
                <!-- <li class="nav-item">
                    <a class="nav-link" id="work-tab" data-bs-toggle="tab" data-bs-target="#work"
                        role="tab">Kelas.work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="boot-tab" data-bs-toggle="tab" data-bs-target="#bootcamp" role="tab">Video
                        Bootcamp</a>
                </li> -->
            </ul>
            <div class="tab-content mt-4 mb-5" id="myTabContent">
                @foreach ($kelas as $kel)
                <div class="tab-pane fade @if ($loop->first) show active @endif" id="{{ $kel->nama }}" role="tabpanel"
                    aria-labelledby="{{ $kel->id }}-tab">
                    <div class="row">
                        @foreach($kel->detail as $kd)
                        <div class="col-6 col-sm-3 col-md col-lg">
                            <div class="card">
                                <div class="video-container">
                                    <iframe src="{{ $kd->link }}" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="description">
                                    <h3 class="v-kelas">{{ $kd->judul }}</h2>
                                    <p class="v-kelas-p">{{ $kd->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>

<div class="container-fluid cta">
    <div class="content pt-3">
        <h3>Tingkatkan Kualitas Perusahaan Anda</h3>
        <p>Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam mengelola pelatihan
            dan membuat prosesnya lebih cepat dan lebih mudah.</p>
        <a type="button" class="btn btn-fill">Ajukan Demo</a>
    </div>
</div>

@endsection
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
                    <a href="#" class="btn btn-primary my-2">Ajukan Demo</a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <h1 class="display-4">Selamat Datang di Website Kami</h1>
        <p class="lead">Kami menawarkan solusi terbaik untuk bisnis Anda</p>
        <a href="#" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
    </div>
</section> -->


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

<section class="benefit">
    <div class="container mb-4">
        <div class="row mb-2">
            <h2 class="text-center mb-2">Bagaimana Kelas Center Membantu Anda</h2>
            <p class="text-center">Kami menghadirkan platform pembelajaran yang komprehensif untuk memberdayakan
                karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
        </div>
        <div class="row mt-3">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" id="lms-tab" data-bs-toggle="tab" data-bs-target="#lms"
                        role="tab">LMS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured"
                        role="tab">Featured</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" role="tab">Video
                        Learning + Live Webinar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="inquiry-tab" data-bs-toggle="tab" data-bs-target="#inquiry"
                        role="tab">Inquiry learning</a>
                </li>
            </ul>
            <div class="tab-content mt-4 mb-5" id="myTabContent">
                <div class="tab-pane fade show active" id="lms" role="tabpanel" aria-labelledby="lms-tab">
                    <div class="row">
                        <div class="col-md">
                            <h3>Optimalkan potensi karyawan anda dengan Learning Management System</h3>
                            <p>Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi
                                pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan
                                hadirkan produktivitas yang unggul dengan LMS kami!</p>
                            <div class="card">
                                <div class="card-header">
                                    Issued Certificated
                                </div>
                                <div class="card-body">
                                    <p>Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap
                                        karyawan.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    On Boarding
                                </div>
                                <div class="card-body">
                                    <p>Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama
                                        mereka bergabung</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    Training On-demand
                                </div>
                                <div class="card-body">
                                    <p>Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas
                                        tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">Featured</div>
                <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">Video Learning</div>
                <div class="tab-pane fade" id="inquiry" role="tabpanel" aria-labelledby="inquiry-tab">Inquiry</div>
            </div>
        </div>
    </div>
</section>

<section class="paket">
    <div class="container mt-5 mb-3">
        <h3 class="text-center mb-4 mt-2">Pilihan Paket Untuk Perusahaan di Kelas Center</h3>
        <div class="row mb-2">
            <div class="col-md">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container enterprise-bar">
            <div class="text">Enterprise</div>
            <div class="text">>100 users All Access Class More Features</div>
            <a href="" class="contact-button">Contact Us</a>
        </div>
    </div>
</section>

<section class="video">
    <div class="container mt-4">
        <h3 class="text-center">Lebih dari 2000+ Learning Video</h3>
        <p class="text-center">Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat
            oleh
            tim kurikulum profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi</p>

        <div class="row">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" id="kelas-tab" data-bs-toggle="tab" data-bs-target="#kelas"
                        role="tab">Kelas.com</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="work-tab" data-bs-toggle="tab" data-bs-target="#work"
                        role="tab">Kelas.work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="boot-tab" data-bs-toggle="tab" data-bs-target="#bootcamp" role="tab">Video
                        Bootcamp</a>
                </li>
            </ul>
            <div class="tab-content mt-4 mb-5" id="myTabContent">
                <div class="tab-pane fade show active" id="kelas" role="tabpanel" aria-labelledby="kelas-tab">
                    <div class="row">
                        <div class="col-md">
                            <div class="card">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="description">
                                    <h2>Video Title</h2>
                                    <p>This is the description of the video. It gives an overview of what the video is
                                        about and
                                        any other relevant information.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="description">
                                    <h2>Video Title</h2>
                                    <p>This is the description of the video. It gives an overview of what the video is
                                        about and
                                        any other relevant information.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="description">
                                    <h2>Video Title</h2>
                                    <p>This is the description of the video. It gives an overview of what the video is
                                        about and
                                        any other relevant information.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">Featured</div>
                <div class="tab-pane fade" id="bootcamp" role="tabpanel" aria-labelledby="bootcamp-tab">Video Learning
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container-fluid cta">
        <div class="content pt-5">
            <h3>Tingkatkan Kualitas Perusahaan Anda</h3>
            <p>Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam mengelola pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</p>
            <a type="button" class="btn btn-primary">Ajukan Demo</a>
        </div>
    </div>
</section>

@endsection
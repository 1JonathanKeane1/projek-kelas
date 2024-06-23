<!DOCTYPE html>
<html>

<head>
    <!-- meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- title -->
    <title>Kelas Center - User</title>

    <!-- icon -->
    <link href="/assets/landing/img/Logo kelas for business_landscape 2 2.png" rel="icon">

    <!-- css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
    <link rel="stylesheet" href="/assets/css/user/style.css">

</head>

<body>

    @include('user/layout/sidebar')

    <div class="main-content">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')

        @include('user/layout/footer')


            <!-- script -->
            <script src="/assets/js/bootstrap.bundle.min.js"></script>

            <script>
            let timer;
            let startTime;

            document.getElementById('startBtn').addEventListener('click', function() {
                this.classList.add('d-none');
                document.getElementById('stopBtn').classList.remove('d-none');

                startTime = new Date();

                timer = setInterval(function() {
                    const now = new Date();
                    const elapsedTime = new Date(now - startTime);
                    const hours = elapsedTime.getUTCHours();
                    const minutes = elapsedTime.getUTCMinutes();
                    const seconds = elapsedTime.getUTCSeconds();
                    document.getElementById('timerDisplay').innerText =
                        `${hours}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                }, 1000);
            });

            document.getElementById('stopBtn').addEventListener('click', function() {
                clearInterval(timer);

                var video = document.getElementById('video').innerHTML;

                const now = new Date();
                const elapsedTime = (now - startTime) / 1000;

                fetch('/user/simpan', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            duration: elapsedTime,
                            date: new Date().toISOString().split('T')[0],
                            video_id: video
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Durasi waktu telah disimpan.');
                        }
                    });

                this.classList.add('d-none');
                document.getElementById('startBtn').classList.remove('d-none');
            });
            </script>

</body>

</html>
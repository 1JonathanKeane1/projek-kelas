@extends('/user/main')

@section('content')

<div class="container">
    <div class="row">
        <img class="gambar-contoh" src="/assets/img/user/teacher.jpg" alt="">
    </div>
    <div class="d-none" id="video">
        {{ $isi->id }}
    </div>
    <h1 class="text-center">Timer</h1>
        <div class="text-center">
            <button id="startBtn" class="btn btn-success btn-lg">Mulai</button>
            <button id="stopBtn" class="btn btn-danger btn-lg d-none">Berhenti</button>
        </div>
        <div class="text-center mt-3">
            <h2 id="timerDisplay">0:00:00</h2>
        </div>
</div>

@endsection
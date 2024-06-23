@extends('/admin/main')

@section('content')

<div class="container mt-5">
    <h1 class="mt-3"> Pendapatan mentor</h1>
    <div class="row">
        @foreach($data as $kelasid => $d)
        <div class="col-md">
    
            <p>Kelas: {{ $d['kelas'] }}</p>
            <p>waktu tonton: {{ $d['waktutonton'] }} Menit</p>
            <p>presentase tonton: {{ $d['persentase'] }}</p>
            <p>Mentor: {{ $d['mentor'] }}</p>
        </div>
        @endforeach
    </div>
    <div class="col-md mt-2">
        <p>Total waktu tonton keseluruhan: {{ $totaltonton }} Menit</p>
        <p>Pendapatan: {{ $pendapatan }}</p>
        <p>Total Pendapatan: {{ $total }}</p>
    </div>
</div>


@endsection
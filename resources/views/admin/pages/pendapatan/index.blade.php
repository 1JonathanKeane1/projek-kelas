@extends('/admin/main')

@section('content')

<div class="container mt-5">
    <h1 class="mt-3"> Pendapatan</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Mentor</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mentor as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->mentor }}</td>
                <td>
                    <form action="/admin/hitung/{{ $m->id }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> hitung</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
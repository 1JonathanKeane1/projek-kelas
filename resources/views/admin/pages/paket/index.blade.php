@extends('/admin/main')

@section('content')

<div class="container mt-5">
    @error('idKelas')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('harga')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('paket')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <h1 class="mt-3"> Paket</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahpaket">
        Tambah Paket
    </button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama paket</th>
                <th scope="col">Harga Paket</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paket as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->paket }}</td>
                <td>{{ $p->harga }}</td>
                <td>{{ $p->kelas->kelas }}</td>
                <td>
                    <button type="button" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                        data-bs-target="#editpaket{{ $p->id }}">
                        <i class="bi bi-pencil-square"></i> Edit
                    </button>
                    <form action="/admin/paket/{{ $p->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Tambah paket -->
<div class="modal fade" id="tambahpaket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/paket" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Paket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="paket" class="form-label">Nama Paket</label>
                        <input type="text" class="form-control" id="paket" name="paket" placeholder="Nama paket"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket"
                            required>
                    </div>
                    <div class="mb-3">
                    <label for="idKelas" class="form-label">Kelas</label>
                        <select class="form-select" name="idKelas" aria-label="Default select example">
                            <option value="" selected>pilih kelas</option>
                            @foreach ($kelas as $k)
                            <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit paket -->
@foreach($paket as $pak)
<div class="modal fade" id="editpaket{{ $pak->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/paket/{{ $pak->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit paket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="paket" class="form-label">Nama paket</label>
                        <input type="text" class="form-control" id="paket" name="paket" value="{{ $pak->paket }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga paket</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $pak->harga }}"
                            required>
                    </div>
                    <div class="mb-3">
                    <label for="idKelas" class="form-label">Kelas</label>
                        <select class="form-select" name="idKelas" aria-label="Default select example">
                            <option value="{{ $pak->idKelas }}" selected>{{ $pak->kelas->kelas }}</option>
                            @foreach ($kelas as $k)
                            <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endforeach


@endsection
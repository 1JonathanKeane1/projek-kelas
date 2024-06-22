@extends('/admin/main')

@section('content')

<div class="container mt-5">
    @error('idPaket')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('isi')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <h1 class="mt-3"> Detail Paket</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdpaket">
        Tambah Detail paket
    </button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">paket</th>
                <th scope="col">Isi </th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dpaket as $dp)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dp->paket->paket }}</td>
                <td>{{ $dp->isi }}</td>
                <td>
                    <button type="button" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                        data-bs-target="#editdpaket{{ $dp->id }}">
                        <i class="bi bi-pencil-square"></i> Edit
                    </button>
                    <form action="/admin/detailpaket/{{ $dp->id }}" method="POST" style="display:inline;">
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

<!-- Modal Tambah Benefit -->
<div class="modal fade" id="tambahdpaket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/detailpaket" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Detail Paket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                    <label for="idPaket" class="form-label">Paket</label>
                        <select class="form-select" name="idPaket" aria-label="Default select example">
                            <option value="" selected>pilih paket</option>
                            @foreach ($paket as $p)
                            <option value="{{ $p->id }}">{{ $p->paket }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea type="textarea" class="form-control" id="isi" name="isi" placeholder="Isi" required></textarea>
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

<!-- Modal Edit benefit -->
@foreach($dpaket as $dpak)
<div class="modal fade" id="editdpaket{{ $dpak->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/detailpaket/{{ $dpak->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Benefit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <div class="mb-3">
                    <label for="idPaket" class="form-label">Paket</label>
                        <select class="form-select" name="idPaket" aria-label="Default select example">
                            <option value="{{ $dpak->idPaket }}" selected>{{ $dpak->paket->paket }}</option>
                            @foreach ($paket as $p)
                            <option value="{{ $p->id }}">{{ $p->paket }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea type="textarea" class="form-control" id="isi" name="isi" required>{{ $dpak->isi }}</textarea>
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
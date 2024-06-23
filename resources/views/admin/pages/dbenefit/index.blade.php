@extends('/admin/main')

@section('content')

<div class="container mt-5">
    @error('idBenefit')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('judul')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('isi')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <h1 class="mt-3"> Detail Benefit</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdbenefit">
        Tambah Detail Benefit
    </button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi </th>
                <th scope="col">Benefit </th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dbenefit as $db)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $db->judul }}</td>
                <td>{{ $db->isi }}</td>
                <td>{{ $db->benefit->benefit }}</td>
                <td>
                    <button type="button" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                        data-bs-target="#editdbenefit{{ $db->id }}">
                        <i class="bi bi-pencil-square"></i> Edit
                    </button>
                    <form action="/admin/detailbenefit/{{ $db->id }}" method="POST" style="display:inline;">
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

<!-- Modal Tambah detail Benefit -->
<div class="modal fade" id="tambahdbenefit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/detailbenefit" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Detail benefit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Nama Judul"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea type="textarea" class="form-control" id="isi" name="isi" placeholder="Isi"
                            required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="idBenefit" class="form-label">Benefit</label>
                        <select class="form-select" name="idBenefit" aria-label="Default select example">
                            <option value="" selected>pilih benefit</option>
                            @foreach ($benefit as $b)
                            <option value="{{ $b->id }}">{{ $b->benefit }}</option>
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

<!-- Modal Edit detail benefit -->
@foreach($dbenefit as $dben)
<div class="modal fade" id="editdbenefit{{ $dben->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/detailbenefit/{{ $dben->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Benefit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $dben->judul }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea type="textarea" class="form-control" id="isi" name="isi"
                            required>{{ $dben->isi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="idBenefit" class="form-label">Benefit</label>
                        <select class="form-select" name="idBenefit" aria-label="Default select example">
                            <option value="{{ $dben->idBenefit }}" selected>{{ $dben->benefit->benefit }}</option>
                            @foreach ($benefit as $b)
                            <option value="{{ $b->id }}">{{ $b->benefit }}</option>
                            @endforeach
                        </select>
                    </div>
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
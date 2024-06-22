@extends('/admin/main')

@section('content')

<div class="container mt-5">
    @error('idKelas')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('video')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <h1 class="mt-3"> video</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahvideo">
        Tambah video
    </button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Video</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($video as $v)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $v->video }}</td>
                <td>{{ $v->kelas->kelas }}</td>
                <td>
                    <button type="button" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                        data-bs-target="#editvideo{{ $v->id }}">
                        <i class="bi bi-pencil-square"></i> Edit
                    </button>
                    <form action="/admin/pengajaran/{{ $v->id }}" method="POST" style="display:inline;">
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

<!-- Modal Tambah video -->
<div class="modal fade" id="tambahvideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/pengajaran" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah benefit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="video" class="form-label">Nama Video</label>
                        <input type="text" class="form-control" id="video" name="video" placeholder="Nama Video"
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit video -->
@foreach($video as $vid)
<div class="modal fade" id="editvideo{{ $vid->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/pengajaran/{{ $vid->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="video" class="form-label">Nama video</label>
                        <input type="text" class="form-control" id="video" name="video" value="{{ $vid->video }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="idKelas" class="form-label">Kelas</label>
                        <select class="form-select" name="idKelas" aria-label="Default select example">
                            <option value="{{ $vid->idKelas }}" selected>{{ $vid->kelas->kelas }}</option>
                            @foreach ($kelas as $k)
                            <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


@endsection
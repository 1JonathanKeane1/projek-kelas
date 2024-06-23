@extends('/admin/main')

@section('content')

<div class="container mt-5">
    @error('link')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('deskripsi')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('idVideo')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('judul')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <h1 class="mt-3"> Video Kelas Landing Page</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahvideo">
        Tambah video
    </button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Video</th>
                <th scope="col">link Video</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dvideo as $v)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $v->video->nama }}</td>
                <td>{{ $v->link }}</td>
                <td>
                    <button type="button" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                        data-bs-target="#editvideo{{ $v->id }}">
                        <i class="bi bi-pencil-square"></i> Edit
                    </button>
                    <form action="/admin/detailvideo/{{ $v->id }}" method="POST" style="display:inline;">
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

<!-- Modal Tambah detail video -->
<div class="modal fade" id="tambahvideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/detailvideo" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Detail Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="link" class="form-label">Link Video</label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="Link video" required>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul video" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi video" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="idVideo" class="form-label">Video</label>
                        <select class="form-select" name="idVideo" aria-label="Default select example">
                            <option value="" selected>pilih Video</option>
                            @foreach ($video as $v)
                            <option value="{{ $v->id }}">{{ $v->nama }}</option>
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

<!-- Modal Edit detail Video -->
@foreach($dvideo as $vd)
<div class="modal fade" id="editvideo{{ $vd->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/detailvideo/{{ $vd->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="link" class="form-label">Link Video</label>
                        <input type="text" class="form-control" id="link" name="link" value="{{ $vd->link }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul video" value="{{ $vd->judul }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi video" required>{{ $vd->deskripsi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="idVideo" class="form-label">Video</label>
                        <select class="form-select" name="idVideo" aria-label="Default select example">
                            <option value="{{ $vd->idVideo }}" selected> {{ $vd->video->nama }}</option>
                            @foreach ($video as $v)
                            <option value="{{ $v->id }}">{{ $v->nama }}</option>
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
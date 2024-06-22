@extends('/admin/main')

@section('content')

<div class="container mt-5">
    @error('mentor')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    @error('idKelas')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <h1 class="mt-3"> Mentor</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahmentor">
        Tambah Mentor
    </button>
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
                    <button type="button" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                        data-bs-target="#editmentor{{ $m->id }}">
                        <i class="bi bi-pencil-square"></i> Edit
                    </button>
                    <form action="/admin/mentor/{{ $m->id }}" method="POST" style="display:inline;">
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

<!-- Modal Tambah mentor -->
<div class="modal fade" id="tambahmentor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/mentor" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Mentor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="mentor" class="form-label">Nama Mentor</label>
                        <input type="text" class="form-control" id="mentor" name="mentor" placeholder="mentor" required>
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

<!-- Modal Edit mentor -->
@foreach($mentor as $men)
<div class="modal fade" id="editModal{{ $men->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/mentor/{{ $men->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Mentor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="benefit" class="form-label">Nama Mentor</label>
                        <input type="text" class="form-control" id="benefit" name="benefit" value="{{ $men->benefit }}" required>
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
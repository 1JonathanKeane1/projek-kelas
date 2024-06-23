@extends('/admin/main')

@section('content')

<div class="container mt-5">
    @error('benefit')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <h1 class="mt-3"> Benefit</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahbenefit">
        Tambah Benefit
    </button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Benefit</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($benefit as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->benefit }}</td>
                <td>
                    <button type="button" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $b->id }}">
                        <i class="bi bi-pencil-square"></i> Edit
                    </button>
                    <form action="/admin/benefit/{{ $b->id }}" method="POST" style="display:inline;">
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
<div class="modal fade" id="tambahbenefit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/benefit" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah benefit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="benefit" class="form-label">Nama Benefit</label>
                        <input type="text" class="form-control" id="benefit" name="benefit" placeholder="Nama benefit"
                            required>
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
@foreach($benefit as $ben)
<div class="modal fade" id="editModal{{ $ben->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/benefit/{{ $ben->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Benefit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="benefit" class="form-label">Nama Benefit</label>
                        <input type="text" class="form-control" id="benefit" name="benefit" value="{{ $ben->benefit }}"
                            required>
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
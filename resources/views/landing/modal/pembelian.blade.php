@foreach ($dpaket as $dpt)
<div class="modal fade" id="beliModal{{ $dpt->paket->id }}" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="authModalLabel">Pembelian paket</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <!-- Login Form -->
                    <form action="/user/beli" method="post">
                        @csrf
                        <input type="text" name="idpaket" id="idpaket" value="{{ $dpt->paket->id }}" hidden>
                        <div class="mb-3">
                            <label for="paket" class="form-label">Nama Paket</label>
                            <input type="text" class="form-control" name="paket" id="paket" value="{{ $dpt->paket->paket }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Paket</label>
                            <input type="text" class="form-control" name="harga" id="harga" value="{{ $dpt->paket->harga }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="user" class="form-label">Nama User</label>
                            <input type="text" class="form-control" name="user" id="user" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <input type="text" class="form-control" name="iduser" id="iduser" value="{{ Auth::user()->id }}" hidden>
                        <button type="submit" class="btn btn-primary">beli</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
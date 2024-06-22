<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\VideoKelas;
use App\Models\Pembelian;
use App\Models\Kelas;

class UserKelasController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::where('idUser', Auth::user()->id)->first();

        $kelas = Kelas::where('idPaket', $pembelian->idPaket)->first();

        return view("user.pages.kelas.index", [
            'video'   => VideoKelas::where('idKelas', $kelas->id)->get(),
        ]);
    }

    public function tonton($id)
    {
        return view("user.pages.tonton.index", [
            'video'   => VideoKelas::where('idKelas', $id)->get(),
            'isi'   => VideoKelas::where('idKelas', $id)->first(),
        ]);
    }
}

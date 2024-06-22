<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function beli(Request $request)
    {
        $data = [
            "idPaket" => $request->input("idpaket"),
            "idUser" => $request->input("iduser"),
        ];

        Pembelian::create($data);

        return redirect('/')->with('success', 'Pembelian Berhasil');

    }
}

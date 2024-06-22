<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Durasi;

class DurasiController extends Controller
{
    public function simpan(Request $request)
    {
        $data = Durasi::where("idUser", Auth::user()->id)->first();

        if($data){

            $var = [
                'idUser'    => Auth::id(),
                'idVideo'   => $request->video_id,
                'durasi'    => $request->duration
            ];

            Durasi::where('idUser', Auth::user()->id)->update($var);
        } else {
            $durasi = new Durasi();
            $durasi->idUser = Auth::id();
            $durasi->idVideo = $request->video_id;
            $durasi->durasi = $request->duration;
            $durasi->save();
        }


        return response()->json(['success' => true]);
    }
}

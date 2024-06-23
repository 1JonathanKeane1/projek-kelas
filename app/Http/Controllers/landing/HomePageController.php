<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paket;
use App\Models\DetailPaket;
use App\Models\Benefit;
use App\Models\DetailBenefit;
use App\Models\DetailVideos;
use App\Models\Video;

class HomePageController extends Controller
{

    public function index()
    {

        $benefit = Benefit::with('detail')->get();
        $paket   = Paket::with('detailpaket')->get();
        $video   = Video::with('detail')->get();

        return view("landing.pages.home", [
            'paket'     => $paket,
            'benefit'   => $benefit,
            'kelas'     => $video,
            'dbenefit'  => DetailBenefit::latest()->get()
        ]);
    }

}

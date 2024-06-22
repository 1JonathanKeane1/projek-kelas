<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paket;
use App\Models\DetailPaket;

class HomePageController extends Controller
{

    public function index()
    {
        return view("landing.pages.home", [
            'dpaket'   => DetailPaket::latest()->get()
        ]);
    }

}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.pages.home.home");
    }
}

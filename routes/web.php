<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BenefitController;
use App\Http\Controllers\admin\PaketController;
use App\Http\Controllers\admin\KelasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing.pages.home');
});

Route::get('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/login', [AdminAuthController::class, 'auth']);
Route::get('/admin/logout', [AdminAuthController::class, 'logout']);

Route::get('/admin', [AdminController::class, 'index']);

Route::resource('/admin/benefit', BenefitController::class);
Route::resource('/admin/paket', PaketController::class);
Route::resource('/admin/kelas', KelasController::class);


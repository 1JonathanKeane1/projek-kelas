<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BenefitController;
use App\Http\Controllers\admin\DetailBenefitController;
use App\Http\Controllers\admin\PaketController;
use App\Http\Controllers\admin\DetailPaketController;
use App\Http\Controllers\admin\KelasController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\VideoKelasController;
use App\Http\Controllers\admin\MentorController;
use App\Http\Controllers\user\UserAuthController;
use App\Http\Controllers\user\PembelianController;
use App\Http\Controllers\user\UserKelasController;
use App\Http\Controllers\user\DurasiController;

use App\Http\Controllers\landing\HomePageController;

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

Route::get('/', [HomePageController::class, 'index']);

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'auth']);

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/logout', [AdminAuthController::class, 'logout']);

    Route::resource('/admin/benefit', BenefitController::class);
    Route::resource('/admin/paket', PaketController::class);
    Route::resource('/admin/kelas', KelasController::class);
    Route::resource('/admin/detailbenefit', DetailBenefitController::class);
    Route::resource('/admin/detailpaket', DetailPaketController::class);
    Route::resource('/admin/video', VideoController::class);
    Route::resource('/admin/pengajaran', VideoKelasController::class);
    Route::resource('/admin/mentor', MentorController::class);
    
});

Route::post('/user/regis', [UserAuthController::class, 'register']);
Route::post('/user/login', [UserAuthController::class, 'login']);
Route::get('/user/logout', [UserAuthController::class, 'logout']);

Route::post('/user/beli', [PembelianController::class, 'beli']);
Route::get('/user/kelas', [UserKelasController::class, 'index']);
Route::get('/user/tonton/{id}', [UserKelasController::class, 'tonton']);
Route::post('/user/simpan', [DurasiController::class, 'simpan']);

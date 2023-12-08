<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\KategoriBeritaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(frontendController::class)->group(function(){
    Route::get('/','beranda')->name('beranda');
    Route::get('/profile/organisasi','organisasi')->name('profile.organisasi');
    Route::get('/profile/visimisi','visimisi')->name('profile.visimisi');
    Route::get('/profile/bpd','bpd')->name('profile.bpd');
    Route::get('/berita','berita')->name('berita.all');
    Route::get('/berita/{slug}','beritabaca')->name('berita.baca');
    Route::get('/keanggotaan','keanggotaan')->name('keanggotaan');
    Route::get('/kegiatan','kegiatan')->name('kegiatan');
    Route::get('/galeriphoto','galeriphoto')->name('galeri.photo');
    Route::get('/galerivideo','galerivideo')->name('galeri.video');
    Route::get('/hubungikami','hubungikami')->name('hubungikami');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/login','renderLoginPage')->name('login');
    Route::post('/login', 'authenticate')->middleware('guest')->name('authenticate');
    Route::get('/logout','logout')->middleware('auth')->name('logout');
});

Route::get('/dashboard',function(){
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::controller(KategoriBeritaController::class)->middleware('auth')->group(function(){
    Route::get('/dashboard/kategori-berita/index','index')->name('berita.kategori-berita.index');
    Route::post('/dashboard/kategori-berita/index','store')->name('berita.kategori-berita.store');
    Route::delete('/dashboard/kategori-berita/{kategoriBerita}/delete','destroy')->name('berita.kategori-berita.delete');
});
Route::controller(BeritaController::class)->middleware('auth')->group(function(){
    Route::get('/dashboard/berita/index','index')->name('berita.berita.index');
    Route::get('/dashboard/berita/create','create')->name('berita.berita.create');
    Route::get('/dashboard/berita/{berita}/edit','edit')->name('berita.berita.edit');
    Route::put('/dashboard/berita/{berita}/update','update')->name('berita.berita.update');
    Route::post('/dashboard/berita/store','store')->name('berita.berita.store');
    Route::delete('/dashboard/berita/{berita}/destroy','destroy')->name('berita.berita.destroy');
});

<?php

use App\Http\Controllers\frontendController;
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
    Route::get('/keanggotaan','keanggotaan')->name('keanggotaan');
    Route::get('/kegiatan','kegiatan')->name('kegiatan');
    Route::get('/galeriphoto','galeriphoto')->name('galeri.photo');
    Route::get('/galerivideo','galerivideo')->name('galeri.video');
    Route::get('/hubungikami','hubungikami')->name('hubungikami');
});

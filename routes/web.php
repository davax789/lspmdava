<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', action: function () {
    return view('halamanutama');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/halamanutama', [App\Http\Controllers\HalamanUtamaController::class, 'index'])->name('halamanutama');
Route::get('/artikel', [App\Http\Controllers\SidebarController::class, 'indexArtikel'])->name('artikel');
Route::get('/event', [App\Http\Controllers\SidebarController::class, 'indexEvent'])->name('event');
Route::get('/galeryimg', [App\Http\Controllers\SidebarController::class, 'indexGalery'])->name('galeryimg');
Route::get('/klien', [App\Http\Controllers\SidebarController::class, 'indexKlien'])->name('klien');
Route::get( '/aboutus', [App\Http\Controllers\NavbarController::class, 'indexAboutus'])->name('aboutus');
Route::get( '/kontakkami', [App\Http\Controllers\NavbarController::class, 'indexKontak'])->name('aboutus');
Route::get( '/produkkami', [App\Http\Controllers\NavbarController::class, 'indexProduk'])->name('aboutus');
Route::get( '/visimisi', [App\Http\Controllers\NavbarController::class, 'indexVisi'])->name('visi');
Route::get( '/profil', [App\Http\Controllers\NavbarController::class, 'indexProfil'])->name('visi');

});

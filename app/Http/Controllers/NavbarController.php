<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function indexAboutus()
    {
        return view('pagenav.aboutus');
    }
    public function indexKontak()
    {
        return view('pagenav.kontakkami');
    }
    public function indexProduk()
    {
        return view('pagenav.produkkami');
    }
    public function indexVisi()
    {
        return view('pagenav.visimisi');
    }
    public function indexProfil()
    {
        return view('pagenav.profil');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function indexArtikel()
    {
        return view(view: 'pagesside.artikel');
    }
    public function indexEvent()
    {
        return view(view: 'pagesside.event');
    }
    public function indexGalery()
    {
        return view(view: 'pagesside.galeryimg');
    }
    public function indexKlien()
    {
        return view(view: 'pagesside.klien');
    }
}

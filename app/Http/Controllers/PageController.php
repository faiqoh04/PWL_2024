<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Metode untuk resource /
    public function index() {
        return 'Selamat Datang';
    }

    // Metode untuk resource /about
    public function about() {
        return 'Siti Faiqoh / 2241760026';
    }

    // Metode untuk resource /articles/{id}
    public function articles($id) {
        return "Halaman Artikel dengan Id $id";
    }
}

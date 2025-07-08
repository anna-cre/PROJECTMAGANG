<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman landing page.
     */
    public function index()
    {
        // Kode ini akan menampilkan file:
        // resources/views/landing.blade.php
        return view('landing');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BeritaController extends Controller
{
    public function index() : View
    {
        $beritas = Berita::latest()->paginate(10);
        return view('berita', compact('beritas'));
    }
}

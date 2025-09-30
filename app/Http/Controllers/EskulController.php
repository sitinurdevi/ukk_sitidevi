<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EskulController extends Controller
{
    public function index() : View
    {
        $eskuls = Eskul::latest()->paginate(10);
        return view('eskul', compact('eskuls'));
    }
}

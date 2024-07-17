<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriController extends Controller
{
    public function index()
    {

        $kategoris = kategori::all();
        return view('kategori.index', [
            "title" => "Kategori"
        ], compact('kategoris'));
    }
}

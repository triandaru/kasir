<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {

        $barangs = barang::all();
        return view('barang.index', [
            "title" => "Barang"
        ], compact('barangs'));
    }
}

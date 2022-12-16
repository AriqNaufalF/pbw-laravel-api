<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function getAllCollections()
    {
        $collections = Collection::all(['id', 'namaKoleksi', 'jenisKoleksi', 'jumlahAwal', 'jumlahSisa', 'jumlahKeluar']);

        return response()->json($collections, 200);
    }
}

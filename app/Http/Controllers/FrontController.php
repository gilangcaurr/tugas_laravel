<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Buku;
use App\Models\Genre; 
use App\Models\Penulis;
class FrontController extends Controller
{
    public function buku() 
    {
        $buku = Buku::latest()->get(); 
        $genre = Genre::all(); 
        $penulis = Penulis::all();
        return view('welcome', compact('buku', 'genre', 'penulis'));
    } 

    public function detailBuku($id){
        $buku = Buku::findOrFail($id); 
        return view('datail_buku', compact('buku'));
    }
}

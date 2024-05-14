<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Models\Artikel;


class ArtikelController extends Controller
{
     // melihat semua data 
    public function getArtikel() 
    {   
        // melihat semua data yang ada di dalam model "Movie"
        $artikels = Artikel::all(); 
        // dump data atau melihat isi data dari sebuah variable 
        // dd($movie); 
        // passing data movie ke view 'movie.index'  
        return view('artikel.artikel', compact('artikels'));
    } 
    public function getArtikelById($id){
        // manampilkan data movie berdasarkan id yang dipiih 
        $art = Artikel::findOrFail($id); 
        return view('artikel.show', compact('art'));
    }  
    public function getArtikelByKategori($kategori){
        // manampilkan data movie berdasarkan id yang dipiih 
        $kategoris = Artikel::where('kategori', $kategori)->get(); 
        return view('artikel.kategori', compact('kategoris'));
    }  
    
}



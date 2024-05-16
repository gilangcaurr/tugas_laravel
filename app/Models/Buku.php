<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory; 

    public $fillable = ['judul', 'isbn', 'deskripsi', 'jml_halaman', 'cover', 'tgl_terbit', 'id_penulis']; 
    public $visible = ['judul', 'isbn', 'deskripsi','jml_halaman', 'cover', 'tgl_terbit', 'id_penulis'];  
    public $timestamps = true;
    
    // membuat relasi one to Many ke model buku 
    public function genre()
    {
        // data Model Penulis bisa memiliki banyak data 
        // dari Model Buku melalui fk 'id_penulis' 
        return $this->BelongsToMany(Genre::class, 'genre_buku', 'id_buku', 'id_genre');
    } 
    public function penulis(){
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }

    // menghapus foto 
    public function deleteImage() 
    {
        if ($this->cover && file_exists(public_path('images/buku/' . $this->cover))) {
            return unlink(public_path('images/buku/' . $this->cover));
        }
    }
}

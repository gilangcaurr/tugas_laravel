<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = ['nama_genre'];
    public $visible = ['nama_genre'];
    public $timestamps = true;

    // relasi many to many
    public function genre_buku()
    {

        // data Model Penulis bisa memiliki banyak data
        // dari Model Buku melalui fk 'id_penulis'

        return $this->hasMany(Buku::class, 'id_genre');

    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory; 

    // kolom mana saja yang boleh di isi 
    public $fillable = ['title', 'descripton', 'cover_url', 'trailer_url', 'viewer']; 

    // kolom(field) mana saja yang boleh diperlihatkan 
    public $visible = ['title', 'descripton', 'cover_url', 'trailer_url', 'viewer'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = ['judul', 'pengarang', 'tahun_terbit', 'id_kategori_buku'];

    public function kategori_buku(){
        return $this->belongsTo("App\Models\KategoriBuku", "id_kategori_buku");
    }

    public function tag(){
        return $this->belongsToMany("App\Models\Tag", "tag_buku", "id_buku", "id_tag");
    }
}

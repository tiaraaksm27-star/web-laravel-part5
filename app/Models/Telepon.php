<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Telepon extends Model
{
    use HasFactory;
    protected $table = 'telepon';
    protected $primaryKey = 'id_telepon';
    protected $fillable = ['telepon'];

    public function penerbit(){
        return $this->belongsTo("App\Models\Penerbit","id_penerbit");
    }
}

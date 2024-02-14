<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $guarded = ['id_pertanyaan'];

    public function kategori()
    { 
        return $this->hasOne(Kategori::class, 'id_kategori', 'id_kategori');
    }

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    public $timestamps = false;
    
    protected $guarded = ['id_pertanyaan'];

    public function kategori()
    { 
        return $this->belongsTo(Kategori::class,'id_kategori','id_kategori');
    }

    use HasFactory;
}

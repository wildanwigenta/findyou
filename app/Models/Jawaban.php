<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
     
    protected $guarded=['id'];

    public function pengguna()
    { 
        return $this->belongsTo(Pengguna::class);
    }
}
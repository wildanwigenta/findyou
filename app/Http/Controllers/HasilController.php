<?php

namespace App\Http\Controllers;
use App\Models\Pertanyaan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index(Request $request)
    {
        
        $jawaban = $request->input('jawaban');

        // Menghitung jumlah jawaban 'ya' untuk setiap kategori
        $kategoriScore = [];
        foreach ($jawaban as $pertanyaanId => $jawab) {
            $pertanyaan = Pertanyaan::findOrFail($pertanyaanId);
            $kategoriId = $pertanyaan->id_kategori;
            if (!isset($kategoriScore[$kategoriId])) {
                $kategoriScore[$kategoriId] = 0;
            }
            if ($jawab === 'ya') {
                $kategoriScore[$kategoriId]++;
            }
        }

        // Menemukan kategori dengan score tertinggi
        $kategoriId = array_keys($kategoriScore, max($kategoriScore))[0];
        $kategori['kategori'] = Kategori::findOrFail($kategoriId);

        return view('portal.result', $kategori);
    }
}

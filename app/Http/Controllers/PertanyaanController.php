<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data['pertanyaan'] = Pertanyaan::all();
        return view('admin.page.pertanyaan.pertanyaan',$data);
    }
    public function tambah_pertanyaan()
    {
        $data['kategori'] = Kategori::all();
        return view('admin.page.pertanyaan.tambah_pertanyaan', $data);
    }
    public function tambah_data_pertanyaan(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required'
        ]);

            $data = [
                'id_kategori' => request()->kategori,
                'pertanyaan' => request()->pertanyaan,
            ];

            Pertanyaan::insert($data);
            return redirect()->to('/admin/pertanyaan')->with('success','pertanyaan berhasil ditambahkan');

    }
     
    public function ubah_pertanyaan($id_pertanyaan)
    {
        $data['kategori'] = Kategori::all();
        $data['pertanyaan'] = Pertanyaan::where('id_pertanyaan',$id_pertanyaan)->first();
        return view('admin.page.pertanyaan.ubah_pertanyaan',$data);
    }
    public function ubah_data_berita(Request $request)
    {

        
        $request->validate([
            'pertanyaan' => 'required',
        ]);

        Pertanyaan::where('id_pertanyaan',request()->id_pertanyaan)->update([
            'id_kategori' => request()->kategori,
            'pertanyaan' => request()->pertanyaan,
        ]);

            return redirect()->to('/admin/semua_berita')->with('update','update sucessfully');
    }
    public function hapus_berita($id_berita)
    {
        $data = Berita::where('id_berita',$id_berita)->first();
        $image_path = public_path('image/berita/'.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }
        
        Berita::where('id_berita',$id_berita)->delete();

        if(Auth::user()->level == 'admin'){
            return redirect()->to('/admin/semua_berita')->with('delete','delete sucessfully');
        }
        elseif(Auth::user()->level == 'jurnalis'){
            return redirect()->to('/jurnalis/semua_berita')->with('delete','delete sucessfully');
        }
    }
}

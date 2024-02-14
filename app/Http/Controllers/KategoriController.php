<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{

    public function index()
    {
        $data['kategori'] = Kategori::all();
        return view('admin.page.kategori.kategori',$data);
    }
    public function tambah_kategori()
    {
        return view('admin.page.kategori.tambah_kategori');
    }
    public function tambah_data_kategori(Request $request )
    {
        $request->validate([
            'kategori' => 'required',
        ]);

        $data = [
            'kategori' => request()->kategori,
        ];
        Kategori::insert($data);
            return redirect()->to('/admin/kategori')->with('success','Kategori berhasil ditambahkan');
    }
    
    public function hapus_kategori($id_kategori)
    {
        Kategori::where('id_kategori',$id_kategori)->delete();
            return redirect()->to('/admin/kategori')->with('delete','delete sucessfully');
    }
}


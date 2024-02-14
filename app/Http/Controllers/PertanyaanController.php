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
     
    public function ubah_berita($id_berita)
    {
        $data['kategori'] = Kategori::all();
        $data['berita'] = Berita::where('id_berita',$id_berita)->first();
        return view('admin.page.berita.ubah_berita',$data);
    }
    public function ubah_data_berita(Request $request)
    {

        $file = request()->image;
        if ($file) {
            $file_name = Str::random(25).'-'.$file->getClientOriginalName();
            $tujuan_upload = 'image/berita';
            $file->move($tujuan_upload,$file_name);
    
            $tmp = public_path('image/berita/'.request()->old_image);
            if(file_exists($tmp)){
                unlink($tmp);
            }
        }else{
            $file_name = request()->old_image;
        }
        
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'waktu_publish' => 'required',
            'keterangan' => 'required',
            'nama_publisher' => 'required',
        ]);

        Berita::where('id_berita',request()->id_berita)->update([
            'id_kategori' => request()->kategori,
            'image' => $file_name,
            'judul' => request()->judul,
            'isi' => request()->isi,
            'waktu_publish' => request()->waktu_publish,
            'keterangan' => request()->keterangan,
            'nama_publisher' => request()->nama_publisher,
        ]);
        if(Auth::user()->level == 'admin'){
            return redirect()->to('/admin/semua_berita')->with('update','update sucessfully');
        }
        elseif(Auth::user()->level == 'jurnalis'){
            return redirect()->to('/jurnalis/semua_berita')->with('update','update sucessfully');
        };
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

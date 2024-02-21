<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;


class PortalController extends Controller
{
    function index()
    {
        return view('portal.index');
        
    }
    function question(Request $request){
        $data['name'] = $request->input('name');
        $data['degree'] = $request->input('degree');
        $data['school'] = $request->input('school');
        $data['pertanyaan'] = Pertanyaan::all();
        return view('portal.question', $data);
    }
}

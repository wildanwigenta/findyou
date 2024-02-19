<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;


class PortalController extends Controller
{
    function index()
    {
        $data['pertanyaan'] = Pertanyaan::all();
        return view('portal.question',$data);
    }
    function hasil(){
        return view('portal.result');
    }
}

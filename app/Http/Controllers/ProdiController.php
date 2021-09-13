<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function mi_page(){
        return view ('prodi_mi');
    }
    public function ti_page(){
        return view ('prodi_ti');
    }
}

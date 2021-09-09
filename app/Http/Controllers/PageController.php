<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function halamanHome(){
        return 'Halaman Home';
    }
    public function halamannews($id){
        return 'berita ke-'.$id;
    }
    public function halamancomment($nama,$id){
        return $nama.' Berkomentar : '.$id;
    }
}



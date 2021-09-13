<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function saranakantor(){
        return view ('sarana_perkantoran');
    }
    public function saranalab(){
        return view ('sarana_lab');
    }
    public function saranakelas(){
        return view ('sarana_kelas');
    }
    public function saranalainnya(){
        return view ('sarana_lainnya');
    }
}

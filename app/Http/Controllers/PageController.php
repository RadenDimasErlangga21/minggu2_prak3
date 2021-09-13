<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing_page(){
        return view ('home');
    }
    public function about_page(){
        return view ('about-us');
    }
}



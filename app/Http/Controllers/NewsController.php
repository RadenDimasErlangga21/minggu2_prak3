<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function halamannews($id){
        return view ('news', ['id'=> $id]);
    }
}

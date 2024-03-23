<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class panolensController extends Controller
{
    public function panorama(){
        return view('pano');
    }
}

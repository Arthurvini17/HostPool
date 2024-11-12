<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function recursos_index(){
        return view('recursos');
    }
}

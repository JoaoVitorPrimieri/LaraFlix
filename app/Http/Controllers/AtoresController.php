<?php

namespace App\Http\Controllers;

use App\Ator;

class AtoresController extends Controller
{
    public function index(){
        $atores = Ator::All();
        
        return view('atores', ['atores'=>$atores]);
    }
}

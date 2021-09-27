<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Personas extends Controller
{
   public function registro(){
       //return "Texto registro desde el controlador";
       return view('registro');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeconnexionController extends Controllers 

{
    public function show()
    {
        return view('Deconnexion');
    }
}
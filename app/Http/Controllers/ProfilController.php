<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        return view('profils.view');
    }

    public function updateProfil(){
        return view('profils.update'); 
    }
}

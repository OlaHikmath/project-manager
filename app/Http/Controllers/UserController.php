<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.liste');
    }

    public function createUser(){

    }

    public function updateUser(){
        
    }

    public function detailUser(){
        return view('users.detail');
    }

    public function detailUserId(){
        
    }
}

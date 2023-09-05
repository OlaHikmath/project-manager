<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('projects.liste');
    }

    public function createProject(){

    }

    public function updateProject(){
        return view('projects.update');
    }

    public function detailProject(){
        return view('projects.detail');
    }

    public function detailProjectId(){
        
    }

}

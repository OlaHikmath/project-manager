<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('tasks.liste');
    }

    public function createTask(){

    }

    public function updateTask(){
        
    }

    public function detailTask(){
        return view('tasks.detail');
    }

    public function detailTaskId(){
        
    }
}

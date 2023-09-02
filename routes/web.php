<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/' , [DashboardController::class, 'index'])->name('dashboard');

//profil
Route::get('/profil-view' , [ProfilController::class, 'index'])->name('profils-index');
Route::get('/profil-update' , [ProfilController::class, 'updateProfil'])->name('profils-update');

//projects
Route::get('/projects' , [ProjectsController::class, 'index'])->name('projects-index');

//tasks
Route::get('/tasks' , [TaskController::class, 'index'])->name('tasks-index');

//users
Route::get('/users' , [UsersController::class, 'index'])->name('users-index');



// Importer un fichier Excel
Route::post("simple-excel/import", "SimpleExcelController@import")->name('excel.import');

// Exporter un fichier Excel
Route::post("simple-excel/export", "SimpleExcelController@export")->name('excel.export');

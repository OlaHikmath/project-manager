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
Route::post('/project-create' , [ProjectsController::class, 'createProject'])->name('projects-create');
Route::post('/project-update' , [ProjectsController::class, 'updateProject'])->name('projects-update');
Route::get('/project-detail' , [ProjectsController::class, 'detailProject'])->name('projects-detail');
Route::get('/project-detail/{id}' , [ProjectsController::class, 'detailProjectId'])->name('projects-detail-id');

//tasks
Route::get('/tasks' , [TaskController::class, 'index'])->name('tasks-index');
Route::post('/task-create' , [TaskController::class, 'createTask'])->name('tasks-create');
Route::post('/task-update/{id}' , [TaskController::class, 'updateTask'])->name('tasks-update');
Route::get('/task-detail' , [TaskController::class, 'detailTask'])->name('tasks-detail');
Route::get('/task-detail/{id}' , [TaskController::class, 'detailTaskId'])->name('tasks-detail-id');

//users
Route::get('/users' , [UsersController::class, 'index'])->name('users-index');
Route::post('/user-create' , [UsersController::class, 'createUser'])->name('users-create');
Route::post('/user-update/{id}' , [UsersController::class, 'updateUser'])->name('users-update');
Route::get('/user-detail' , [UsersController::class, 'detailUser'])->name('users-detail');
Route::get('/user-detail/{id}' , [UsersController::class, 'detailUserId'])->name('users-detail-id');


// Importer un fichier Excel
Route::post("simple-excel/import", "SimpleExcelController@import")->name('excel.import');

// Exporter un fichier Excel
Route::post("simple-excel/export", "SimpleExcelController@export")->name('excel.export');

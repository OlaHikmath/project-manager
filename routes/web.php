<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::middleware(['auth', "verified"])->group(function () {
    Route::get('/' , [DashboardController::class, 'index'])->name('dashboard');

    //profil
    Route::get('/profil-view' , [ProfilController::class, 'index'])->name('profils-index');
    Route::get('/profil-update' , [ProfilController::class, 'updateProfil'])->name('profils-update');
    
    //projects
    Route::get('/projects' , [ProjectController::class, 'index'])->name('projects-index');
    Route::post('/project-create' , [ProjectController::class, 'createProject'])->name('projects-create');
    Route::post('/project-update' , [ProjectController::class, 'updateProject'])->name('projects-update');
    Route::get('/project-detail' , [ProjectController::class, 'detailProject'])->name('projects-detail');
    Route::get('/project-detail/{id}' , [ProjectController::class, 'detailProjectId'])->name('projects-detail-id');
    
    //tasks
    Route::get('/tasks' , [TaskController::class, 'index'])->name('tasks-index');
    Route::post('/task-create' , [TaskController::class, 'createTask'])->name('tasks-create');
    Route::post('/task-update/{id}' , [TaskController::class, 'updateTask'])->name('tasks-update');
    Route::get('/task-detail' , [TaskController::class, 'detailTask'])->name('tasks-detail');
    Route::get('/task-detail/{id}' , [TaskController::class, 'detailTaskId'])->name('tasks-detail-id');
    
    //users
    Route::get('/users' , [UserController::class, 'index'])->name('users-index');
    Route::post('/user-create' , [UserController::class, 'createUser'])->name('users-create');
    Route::post('/user-update/{id}' , [UserController::class, 'updateUser'])->name('users-update');
    Route::get('/user-detail' , [UserController::class, 'detailUser'])->name('users-detail');
    Route::get('/user-detail/{id}' , [UserController::class, 'detailUserId'])->name('users-detail-id');

// });
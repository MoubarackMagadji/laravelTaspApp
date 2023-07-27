<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersActionController;
use App\Models\User;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerPost'])->name('registerPost');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginPost'])->name('loginPost');

Route::middleware('auth')->prefix('user')->group(function(){
    Route::get('/dashboard', [UsersActionController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [UsersActionController::class, 'users'])->name('users');
    Route::get('/users/create', [UsersActionController::class, 'createUserForm'])->name('create');
    Route::post('/users/create', [UsersActionController::class, 'createUserFormPost']);

    Route::prefix('tasks')->group(function(){
        Route::get('/', [UsersActionController::class, 'tasks'])->name('tasks');
        Route::get('/create', [TasksController::class, 'create'])->name('createTask');
        Route::post('/create', [TasksController::class, 'store'])->name('createTaskPost');
        
        Route::get('/task/{task:slug}', [TasksController::class, 'show'])->name('task');
        Route::get('/task/{task}/edit', [TasksController::class, 'edit'])->name('taskEdit');
        Route::post('/task/edit', [TasksController::class, 'update'])->name('taskEditPost');

    });
    
});



Route::get('/logout', [UserController::class, 'logout'])->name('logout');


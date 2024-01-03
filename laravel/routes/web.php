<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Controllers\TaskController;
// use Illuminate\Support\Facades\Response;

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

Route::get('/', [TaskController::class,'index']);

Route::get('/tasks', [TaskController::class, "index"])->name('tasks.index');

Route::get('/tasks/{id}', [TaskController::class, "show"])->name('tasks.show');

Route::get('/tasks/0/create', [TaskController::class, "create"])->name('tasks.create');

Route::post('/tasks', [TaskController::class, "store"])->name('tasks.store');

Route::get('/tasks/{id}/edit', [TaskController::class, "edit"])->name('tasks.edit');

Route::put('/tasks/{id}/update', [TaskController::class, "update"])->name('tasks.update');
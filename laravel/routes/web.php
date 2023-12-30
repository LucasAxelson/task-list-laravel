<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function () {
  return redirect()->route('tasks.index');
});

Route::get('tasks/', function () {
    return view('index', [
      'tasks' => \App\Models\Task::latest()->where('completed', true)->get()
    ]);
})->name('tasks.index');

Route::get('tasks/{id}', function ($id) {
  return view ('view', [ 'task' => \App\Models\Task::findOrFail($id) ]);
})->name('tasks.show');

Route::get('create', function () {
  return view('create');
})->name('tasks.create');

Route::post('tasks/', function (Request $request) {
  dd($request->all());
})->name('tasks.store');
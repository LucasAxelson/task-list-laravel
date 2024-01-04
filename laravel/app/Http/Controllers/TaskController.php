<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            'tasks' => Task::latest()->where('completed', false)->get()
          ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required | min: 1 | string | max: 80',
            'description' => 'required | min:1 | string | max: 255',
            'long_description' => 'nullable | string | max: 255',
           ]);
          
           Task::create($data);
           return redirect(route('tasks.index'))->with('success','Task created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     */
    public function show(string $id)
    {
        return view ('tasks.view', [ 'task' => Task::findOrFail($id) ]);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Models\Task  $task
     */
    public function edit( string $id)
    {
        return view('tasks.edit', [ 'task' => Task::findOrFail($id) ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Request
     */
    public function update($id, Task $task, Request $request)
    {
        $data = $request->validate([
            'title' => 'min: 1 | string | max: 80',
            'description' => 'min:1 | string | max: 255',
            'long_description' => 'string | max: 255',
           ]);
          
           $task = Task::findOrFail($id);
           $task->title = $data['title'];
           $task->description = $data['description'];
           $task->long_description = $data['long_description'];
           $task->save();

           return redirect(route('tasks.index'))->with('success','Task edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     */
    public function destroy(Task $task)
    {
        //
    }
}

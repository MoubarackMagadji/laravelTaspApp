<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $task = $request->validate([
            'title' => 'required|min:6|max:50',
            'content' => 'required'
        ]);

        $task['slug'] = Str::slug($task['title']);
        $task['user_id'] = Auth::id();
        
        Tasks::create($task);

        return redirect(route('createTask'))->with('success', 'Task created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Tasks $task)
    {
        return view('tasks.task', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasks $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        // dd();

        $taskToUpdate = Tasks::findOrFail($request->task_id);
        
        $task = $request->validate([
            'title' => 'required|min:6|max:50',
            'content' => 'required'
        ]);
        
        $taskToUpdate->update($task);

        return redirect(route('task', ['task'=>$taskToUpdate->slug]))->with('success', 'Task update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasks $tasks)
    {
        //
    }
}

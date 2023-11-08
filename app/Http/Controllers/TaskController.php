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
        return view('backend.task.index',['tasks' => Task::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Task::storetask($request);
        return redirect()->route('task.index')->with('message','task create sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('backend.task.edit',['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        Task::updatetask($task,$request);
        return redirect()->route('task.index')->with('message','task update sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        Task::deletetask($task);
        return redirect()->route('task.index')->with('message','task delete sucessfully');
    }
}

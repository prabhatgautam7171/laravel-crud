<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
{
    $tasks = Task::all();

    return view('tasks.index', [
        'tasks' => $tasks,
    ]);
}

    public function create()
    {
        return view('tasks.create');
    }

    public function edit(Task $task)
{
    return view('tasks.edit', [
        'task' => $task,
    ]);
}

    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status ?? 'pending',
        ]);

        return redirect('/tasks');
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect('/tasks');
    }

    public function destroy(Task $task)
{
    $task->delete();

    return redirect('/tasks');
}
}

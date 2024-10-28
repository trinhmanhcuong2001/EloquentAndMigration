<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('project')->get();

        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        $projects = Project::all();
        return view('tasks.create', [
            'projects' => $projects
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $task = Task::create($data);

        return redirect()->route('task.index');
    }

    public function edit(Task $task)
    {
        $projects = Project::all();
        return view('tasks.edit', [
            'task' => $task,
            'projects' => $projects
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $data = $request->all();
        $task->update($data);

        return redirect()->route('task.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('task.index');
    }
}

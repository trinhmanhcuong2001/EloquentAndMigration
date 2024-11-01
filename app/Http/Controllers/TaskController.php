<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $query = Task::query();
        if ($keywords = $request->get('keywords')) {
            $query->where('title', 'LIKE', '%' . $keywords . '%');
        }

        if (!is_null($request->get('completed'))) {
            $query->where('completed', $request->get('completed'));
        }

        $tasks = $query->get();

        return view('index', [
            'tasks' => $tasks,
        ]);
    }
}

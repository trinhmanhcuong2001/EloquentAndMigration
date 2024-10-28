<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view("projects.index", [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());

        return redirect()->route('project.index');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return redirect()->route('project.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index');
    }
}

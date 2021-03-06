<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{
    //
    public function index()
    {
    	# code...
        $projects = Project::all();

        return view('project.index', [
            'projects' => $projects,
        ]);

    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $validated_request = $request->validate([
            'project_name'=> 'required',
        ]);

        Project::create($validated_request);

        return redirect()->route('projects.index');
    }

    public function update(Request $request, Project $project)
    {
        $validated_request = $request->validate([
            'project_name'=> 'required',
            'description' => 'nullable',
        ]);

        $project->update($validated_request);

        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }

    public function show(Project $project)
    {
        return view('project.show', [
            'project' => $project,
        ]);
    }

    public function edit(Project $project)
    {
        return view('project.edit', [
            'project' => $project,
        ]);
    }
}

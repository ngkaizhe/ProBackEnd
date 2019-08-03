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
        $project = new Project();

        $project->project_name = $request->project_name;

        $project->description = $request->description;

        $project->save();

        return redirect('/projects');
    }
}

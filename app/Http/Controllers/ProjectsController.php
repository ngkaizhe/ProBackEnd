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
}

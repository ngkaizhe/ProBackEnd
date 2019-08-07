<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Task;

class ProjectTasksController extends Controller
{
    //
    public function update(Request $request, Task $task)
    {
        if($request->has('completed')){
            $task->complete();
        }
        else{
            $task->incomplete();
        }

        return back();
    }

    public function store(Request $request, Project $project)
    {
        $newTask = $request->validate([
            'description' => 'required',
        ]);

        $project->addTask($newTask);

        return back();
    }
}

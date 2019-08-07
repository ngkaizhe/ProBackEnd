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
        $task->update([
            'completed' => $request->has('completed'),
        ]);
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

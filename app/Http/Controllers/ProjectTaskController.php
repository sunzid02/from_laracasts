<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use App\Project;

class ProjectTaskController extends Controller
{
    public function update( Task $task )
    {
        //    dd(request()->all());

        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }

    public function store(Project $project)
    {
        $attributes = request()->validate([
            'description' => 'required',
        ]);

        $project->addTask($attributes);

        return back();
    }
}

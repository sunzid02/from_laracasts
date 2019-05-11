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
        // 1.
        // if (request()->has('completed')) 
        // {
        //     $task->complete();
        // } 
        // else 
        // {
        //     $task->incomplete();
        // }
        
        // 2.
        // request()->has('completed') ?  $task->complete() : $task->incomplete() ;

        // 3.
        $method = request()->has('completed') ?  'complete' : 'incomplete' ;

        $task->$method();
        
        return back();
    }

    
    public function store(Project $project)
    {
        // dd($project);
        $attributes = request()->validate([
            'description' => 'required',
        ]);

        $project->addTask($attributes);

        return back();
    }
}

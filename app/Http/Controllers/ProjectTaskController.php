<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

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
}

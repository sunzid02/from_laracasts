<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $name = "zia";
 
    //     return view('projects.index',[
    //        'projects' => $projects,
    //    ]);
 
        return view('projects.index',compact('projects', 'name'));
    }
}

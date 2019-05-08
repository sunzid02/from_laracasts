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
 
        return view('projects.index',compact('projects', 'name'));
    }


    public function create()
    {
        return view('projects.create');
    }


    public function store()
    {
        //validation
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        //data storing
        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }


    public function show(Project $project)
    {
        // $project = Project::findOrFail($id);
        return view('projects.show', compact('project') );
    }

    public function edit(Project $project)
    {
        
        return view('projects.edit', compact('project') );
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('projects');
    }


    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('projects');

    }
}

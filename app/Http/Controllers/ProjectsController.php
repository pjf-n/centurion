<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //

    public function index()
    {
        $projects  = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store()
    {
        $project = new Project();

        $project->title = \request('title');

        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function create()
    {

        Project::create(
            [
                'title' => \request('title'),
                'description' => \request('description')
            ]
        );

        return view('projects.create');
    }

    public function show()
    {

    }

    public function update(Project $project)
    {

        $project->title = request('title');

        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }

    public function destroy()
    {

    }

    public function edit(Project $project)
    {


        $project;


        return view('projects.edit', compact('project'));
    }
}

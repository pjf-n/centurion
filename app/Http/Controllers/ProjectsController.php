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
        Project::create(request(['title', 'description']));


        return redirect('/projects');
    }

    public function create()
    {

        return view('projects.create');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function update(Project $project)
    {

        $project->title = request('title');

        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }

    public function destroy(Project $project)
    {

        $project->delete();

        session()->flash('success', 'Project successfully deleted');
        return view('projects.index');
    }

    public function edit(Project $project)
    {

        return view('projects.edit', compact('project'));
    }
}

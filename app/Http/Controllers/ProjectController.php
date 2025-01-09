<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
        ]);

        Project::create([
            'name' => $request->name,
        ]);

        return redirect()->route('project.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        $project = Project::find($project->id);
        return view('projects.update', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
        ]);

        Project::where('id', $project->id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('project.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        Project::where('id', $project->id)->delete();
        $project=Project::find($project->id);
        return redirect()->route('project.index')->with('success', 'Data berhasil dihapus');
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Project;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            // llamamos al Modelo
            'projects' => Project::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[
            'project' => new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        
        Project::create($request->validated());
        
        return redirect()->route('projects.index')->with('status', 'El proyecto fué creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {        
        return view('projects.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update();
        
        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fué actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index', $project)->with('status', 'El proyecto fué destruido con éxito');
    }
}

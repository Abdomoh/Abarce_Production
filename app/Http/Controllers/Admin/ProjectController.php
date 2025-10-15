<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->orderBy('created_at','desc')->get();
        $services = Service::select('id', 'title')->get();
        $clients = Client::select('id', 'name')->get();
        return view('admin.projects.index', compact('projects', 'services', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $validated = $request->validated();
        $project = Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'service_id'=>$validated['service_id'],
            'client_id'=>$validated['client_id']
        ]);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('projects', 'public');
                $project->images()->create(['image' => $path]);
            }
        }
        toastr()->AddSuccess('تم اضافة المشروع بنجاح!');
        return redirect()->route(route: 'projects.index');

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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $validated = $request->validated();

        $project->update([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'service_id' => $validated['service_id'],
            'client_id' => $validated['client_id'],
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('projects', 'public');
                $project->images()->create(['image' => $path]);
            }
        }

        toastr()->success('تم تعديل المشروع بنجاح!');
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        $project->delete();
        toastr()->addError('تم حزف  المشروع بنجاح!');

        return redirect()->route('projects.index');
    }
}

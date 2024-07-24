<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use App\Models\PhotoGallery;
use App\Models\Project;
use App\Models\Team;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $teams = Team::all();
        return view('admin.projects.create', compact('categories', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $inputs = $request->except('gallery');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $filename);
            $inputs['image'] = $filename;
        }

        $project = Project::create($inputs);

        if ($request->hasFile('gallery')) {
            $gallery = $request->file('gallery');
            foreach ($gallery as $file) {
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/projects/gallery'), $filename);
                $galleryInputs['image'] = $filename;
                $galleryInputs['project_id'] = $project->id;
                PhotoGallery::create($galleryInputs);
            }
        }

        $notification = array(
            'message' => 'Project created successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.projects.index')->with($notification);
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
       // dd($project->gallery);
        $categories = Category::all();
        $teams = Team::all();
        return view('admin.projects.edit', compact('project', 'categories', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $inputs = $request->except('gallery');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $filename);
            $inputs['image'] = $filename;
        }

        $project->update($inputs);

        if ($request->hasFile('gallery')) {
            $gallery = $request->file('gallery');
            foreach ($gallery as $file) {
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/projects/gallery'), $filename);
                $galleryInputs['image'] = $filename;
                $galleryInputs['project_id'] = $project->id;
                PhotoGallery::create($galleryInputs);
            }
        }

        $notification = array(
            'message' => 'Project updated successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.projects.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $image_path = '/upload/projects/' . $project->image;
        unlink(public_path() . $image_path);

        $message = 'Project has been deleted successfully.';
        $alertType = 'success';

        $deleted = $project->delete();
        if (!$deleted) {
            $message = 'Project dose not deleted successfully.!';
            $alertType = 'error';
        }

        foreach ($project->gallery()->get() as $gallery) {
            $image_path = '/upload/projects/gallery/' . $gallery->image;
            unlink(public_path() . $image_path);
        }

        $project->gallery()->delete();

        $notification = array(
            'message' => $message,
            'alert-type' => $alertType
        );
        return redirect()->route('admin.projects.index')->with($notification);
    }
}

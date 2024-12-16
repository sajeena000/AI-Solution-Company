<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.pages.project.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.pages.project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'thumbnail' => 'nullable|mimes:png,jpg,jpeg',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'year' => 'required|numeric|digits:4',
            'description' => 'nullable',
        ]);

        $thumbnail = null;
        $image = null;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = time() . '_' . $file->getClientOriginalName();
            Storage::disk('public')->putFileAs('projects', $file, $thumbnail);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . '_' . $file->getClientOriginalName();
            Storage::disk('public')->putFileAs('projects', $file, $image);
        }

        $project = new Project();
        $project->title = $request->title;
        $project->category = $request->category;
        $project->thumbnail = $thumbnail;
        $project->image = $image;
        $project->year = $request->year;
        $project->description = $request->description;
        $project->save();

        return redirect()->route('admin.project');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.pages.project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'thumbnail' => 'nullable|mimes:png,jpg,jpeg',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'year' => 'required|numeric|digits:4',
            'description' => 'nullable',
        ]);

        $project = Project::findOrFail($id);

   
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = time() . '_' . $file->getClientOriginalName();
            //upload
            Storage::disk('public')->putFileAs('projects', $file, $thumbnail);
            //delete
            Storage::disk('public')->delete('projects/' . $project->thumbnail);

            $project->thumbnail = $thumbnail;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . '_' . $file->getClientOriginalName();
            Storage::disk('public')->putFileAs('projects', $file, $image);
            //delete
            Storage::disk('public')->delete('projects/' . $project->image);

            $project->image = $image;
        }

        // update
        $project->title = $request->title;
        $project->category = $request->category;
        $project->year = $request->year;
        $project->description = $request->description;
        $project->save();

        return redirect()->route('admin.project');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id); //return 404 if not found.

        if ($project->thumbnail) {
            Storage::disk('public')->delete('projects/' . $project->thumbnail);
        }
        if ($project->image) {
            Storage::disk('public')->delete('projects/' . $project->image);
        }

        $project->delete();

        return back();
    }
}

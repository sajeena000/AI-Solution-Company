<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{

    public function index()
    {
        
        $blogs = Blog::paginate(10);

        return view('admin.pages.blogs.index', compact('blogs'));
    }

    public function create()
    {
        // Display the blog creation form
        return view('admin.pages.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'status' => 'required|boolean', 
        ]);

        $thumbnail = null;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = time() . '_' . $file->getClientOriginalName();
            Storage::disk('public')->putFileAs('blogs', $file, $thumbnail);
        }

        
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->category = $request->category;
        $blog->author = $request->author;
        $blog->thumbnail = $thumbnail;
        $blog->content = $request->content;
        $blog->status = $request->status;
        $blog->save();

        
        return redirect()->route('admin.blogs.index');


    }

    public function edit($id)
    {
        // Find the blog by ID
        $blog = Blog::findOrFail($id);

        // Pass the blog data to the edit view
        return view('admin.pages.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'status' => 'required|boolean', 
        ]);

        // Find the blog by ID
        $blog = Blog::findOrFail($id);

        // Handle thumbnail update if it exists
    
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = time() . '_' . $file->getClientOriginalName();
            Storage::disk('public')->putFileAs('blogs', $file, $thumbnail);

            // Delete the old thumbnail
            if ($blog->thumbnail) {
                Storage::disk('public')->delete('blogs/' . $blog->thumbnail);
            }

            $thumbnail = $blog->thumbnail;
        }


        // update
        $blog->title = $request->title;
        $blog->category = $request->category;
        $blog->author = $request->author;
        $blog->content = $request->content;
        $blog->status = $request->status;
        $blog->save();

        return redirect()->route('admin.blogs.index');
    }

    public function destroy($id)
    {
        // Find the blog by ID
        $blog = Blog::findOrFail($id);

        // Delete the thumbnail if it exists
        if ($blog->thumbnail) {
            Storage::disk('public')->delete('blogs/' . $blog->thumbnail);
        }

        // Delete the blog
        $blog->delete();

        // Redirect to the blogs index page with a success message
        return redirect()->route('admin.blogs.index');
    }
}
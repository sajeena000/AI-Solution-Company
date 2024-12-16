<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.pages.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.pages.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . '_' . $file->getClientOriginalName();
            Storage::disk('public')->putFileAs('events', $file, $image);
        }

        $event = new Event();
        $event->title = $request->title;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->description = $request->description;
        $event->image = $image;
        $event->save();

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully!');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.pages.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $event = Event::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . '_' . $file->getClientOriginalName();
            Storage::disk('public')->putFileAs('events', $file, $image);

            if ($event->image) {
                Storage::disk('public')->delete('events/' . $event->image);
            }

            $event->image = $image;
        }

        // update
        $event->title = $request->title;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->description = $request->description;

        $event->save();

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->image) {
            Storage::disk('public')->delete('events/' . $event->image);
        }

        $event->delete();

        return back()->with('success', 'Event deleted successfully!');
    }
}

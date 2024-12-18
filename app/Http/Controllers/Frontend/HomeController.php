<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function pricing()
    {
        return view('frontend.pages.pricing');
    }
    public function service()
    {
        return view('frontend.pages.service');
    }
    public function gallery()
    {
        return view('frontend.pages.gallery');
    }
    public function contact(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:15',
                'company' => 'nullable|string|max:255',
                'country' => 'nullable|string|max:255',
                'job_title' => 'nullable|string|max:255',
                'job_details' => 'nullable|string',
            ]);

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->company = $request->company;
            $contact->country = $request->country;
            $contact->job_title = $request->job_title;
            $contact->job_details = $request->job_details;
            $contact->save();

            // Redirect back with a success message
            // Session::put('success', "messge");
            Session::flash('success', 'Your message has been sent successfully!');
            return redirect()->back();
        }

        // GET METHOD
        return view('frontend.pages.contact');
    }

    public function project()
    {
        $projects = Project::orderBy('year', 'DESC')->get();
        return view('frontend.pages.project', compact('projects'));
    }



    public function blogs()
    {
        $blogs = Blog::where('status', true)->orderBy('created_at', 'DESC')->paginate(6);
        return view('frontend.pages.blogs', compact('blogs'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::where('id', $id)->where('status', true)->first();
        if (!$blog) {
            abort(404);
        }

        $previousBlog = Blog::where('status', true)->where('id', '<', $id)->first();
        $nextBlog = Blog::where('status', true)->where('id', '>', $id)->first();

        $latestBlogs = Blog::where('status', true)->whereNot('id', $id)->limit(3)->get();

        return view('frontend.pages.blog-single', compact('blog', 'latestBlogs', 'nextBlog', 'previousBlog'));
    }



   public function events()
{
    // Get all paginated events, ordered by most recent first
    $events = Event::orderBy('date', 'DESC')->paginate(6);

    // Get upcoming events (starting from today onward)
    $upcomingEvents = Event::where('date', '>=', now()->startOfDay())
                            ->orderBy('date', 'ASC')
                            ->take(3)
                            ->get();

    // Get the latest events for the sidebar (most recent)
    $latestEvents = Event::latest('date')->take(3)->get();

    // Pass data to the view
    return view('frontend.pages.events', compact('events', 'upcomingEvents', 'latestEvents'));
}

public function eventsDetail($id)
{
    // Retrieve the event by ID, or throw a 404 if not found
    $event = Event::findOrFail($id);

    // Get upcoming events for the sidebar
    $upcomingEvents = Event::where('date', '>=', now()->startOfDay())
                            ->orderBy('date', 'ASC')
                            ->take(3)
                            ->get();

    // Pass the event and sidebar data to the view
    return view('frontend.pages.event-single', compact('event', 'upcomingEvents'));
}


    public function blogSingle()
    {
        return view('frontend.pages.blog-single');
    }
}

?>

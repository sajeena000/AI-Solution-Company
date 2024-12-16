<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
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
            $contact->name  = $request->name;
            $contact->email  = $request->email;
            $contact->phone  = $request->phone;
            $contact->company  = $request->company;
            $contact->country   = $request->country;   
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
    public function blogGrid()
    {
        $blogs = Blog::where('status', true)->orderBy('created_at', 'DESC')->paginate(6);
        return view('frontend.pages.blog-grid', compact('blogs'));
    }
    public function blogSidebar()
    {
        return view('frontend.pages.blog-sidebar');
    }
    public function blogSingle()
    {
        return view('frontend.pages.blog-single');
    }
}

?>

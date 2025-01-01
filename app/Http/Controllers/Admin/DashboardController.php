<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Feedback;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total_projects = Project::count();
        $total_feedbacks = Feedback::count();
        $total_blogs = Blog::count();
        $total_events = Event::count();

        $recent_feedbacks = Feedback::latest()->limit(10)->get();

        return view('admin.dashboard.index', compact('total_projects', 'total_feedbacks', 'total_blogs', 'total_events', 'recent_feedbacks'));
    }
    public function widget(){
        return view('admin.pages.widget');
    }
    public function error(){
        return view('admin.pages.404');
    }
    public function blank(){
        return view('admin.pages.blank');
    }
    public function chart(){
        return view('admin.pages.chart');
    }
    public function element(){
        return view('admin.pages.element');
    }
    public function typography(){
        return view('admin.pages.typography');
    }
    public function table(){
        return view('admin.pages.table');
    }
    public function form(){
        return view('admin.pages.form');
    }
    public function button(){
        return view('admin.pages.button');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.index');
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

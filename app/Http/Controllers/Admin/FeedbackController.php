<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback; // Ensure the Feedback model is imported

class FeedbackController extends Controller
{
    /**
     * Display a listing of the feedback.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $feedbacks = Feedback::latest()->get();
    return view('admin.pages.feedback.index', compact('feedbacks'));
}

public function show($id)
{
    $feedback = Feedback::findOrFail($id);
    return view('admin.pages.feedback.show', compact('feedback'));
}

public function destroy($id)
{
    $feedback = Feedback::findOrFail($id);
    $feedback->delete();

    return redirect()->route('admin.feedback.index')->with('success', 'Feedback deleted successfully.');
}


}



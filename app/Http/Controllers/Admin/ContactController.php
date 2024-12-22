<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\sendInquiryEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('admin.pages.contact.index', compact('contacts'));
    }

    public function sendMail(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        Mail::to($contact->email)->send(new sendInquiryEmail($request->content));

        // Session::flash();
        return back();
    }

    public function destroy($id)
    {
        Contact::destroy($id);

        return back();
    }
}

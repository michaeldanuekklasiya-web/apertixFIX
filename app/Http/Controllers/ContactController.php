<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required',
        ]);

        // Store the data in the database
        $data = Contact::create([
            'firstname' => $request->input('fname'),
            'lastname' => $request->input('lname'),
            'email' => $request->input('email'),
            'description' => $request->input('description'),
        ]);

        if ($data) {
            return redirect()->back()->with('success', 'Message sent successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to save the message.');
        }
    }
}

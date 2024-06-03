<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'project' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Store data in the database
        $contact = Contact::create($validatedData);

        // Send email to admin
        Mail::to('info@kizuriholding.com')->send(new ContactFormMail($contact));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}

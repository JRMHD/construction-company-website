<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use App\Mail\QuoteRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteRequestController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:255',
            'project' => 'required|string',
            'additional_info' => 'nullable|string',
        ]);

        // Store data in the database
        $quoteRequest = QuoteRequest::create($validatedData);

        // Send email to admin
        Mail::to('info@kizuriholding.com')->send(new QuoteRequestMail($quoteRequest));

        return redirect()->back()->with('success', 'Your quote request has been sent successfully!');
    }
}

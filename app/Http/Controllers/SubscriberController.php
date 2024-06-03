<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\SubscriberNotification;
use App\Mail\ThankYouForSubscribing;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:subscribers',
        ]);

        $subscriber = Subscriber::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Send email to the website owner
        Mail::to('info@kizuriholding.com')->send(new SubscriberNotification($subscriber));

        // Send thank you email to the subscriber
        Mail::to($subscriber->email)->send(new ThankYouForSubscribing($subscriber));

        return back()->with('success', 'Thank you for subscribing to our newsletter.');
    }
}

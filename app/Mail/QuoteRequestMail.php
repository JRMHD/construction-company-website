<?php

namespace App\Mail;

use App\Models\QuoteRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quoteRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(QuoteRequest $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.quote_request')
            ->with([
                'name' => $this->quoteRequest->name,
                'email' => $this->quoteRequest->email,
                'phone' => $this->quoteRequest->phone,
                'location' => $this->quoteRequest->location,
                'project' => $this->quoteRequest->project,
                'additional_info' => $this->quoteRequest->additional_info,
            ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $inquiry;
    public $consentForm;

    public function __construct($inquiry, $consentForm = null)
    {
        $this->inquiry = $inquiry;
        $this->consentForm = $consentForm;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank You for Your Enquiry!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inquiry-confirmation',
        );
    }
}
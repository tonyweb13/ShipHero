<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MandrillMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $recipient_name, $recipient_email, $content;

    public function __construct($subject, $recipient_name, $recipient_email, $content){
        $this->subject = $subject;
        // $this->sender_name = $sender_name;
        // $this->sender_email = $sender_email;
        $this->recipient_email = $recipient_email;
        $this->recipient_name = $recipient_name;
        $this->content = $content;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.mailtemplate',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

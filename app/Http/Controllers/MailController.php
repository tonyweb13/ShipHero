<?php

namespace App\Http\Controllers;

use App\Mail\MandrillMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class MailController extends Controller
{
    public function store(Request $request): RedirectResponse {

        $subject = $request->subject;
        // $sender_name = $request->sender_name;
        // $sender_email = $request->sender_email;
        $recipient_name = $request->recipient_name;
        $recipient_email = $request->recipient_email;
        $content = $request->content;


        Mail::to($recipient_email)->send(new MandrillMail($subject, $recipient_name, $recipient_email, $content));

        return redirect('/');
    }
}

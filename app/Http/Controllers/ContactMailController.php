<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function contact()
    {
        Mail::to('hogehoge@example.com')->queue(new ContactMail);
    }
}

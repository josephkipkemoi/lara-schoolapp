<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function show()
    {
        $messages = Contact::all();

        return view('notification.show', compact('messages'));
    }
}

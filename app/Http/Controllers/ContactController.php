<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function __invoke()
    {
        return view('contact.show');
    }

    public function store()
    {
        $data = request()->validate([
            'full_name' => ['required','string'],
            'phone_number' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'title' => ['required','string'],
            'message' => ['required', 'string']
        ]);

        Contact::create($data);

        return view('contact.success');
    }
}

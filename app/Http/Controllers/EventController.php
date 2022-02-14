<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function __invoke(Event $event)
    {
       $events = $event->all();

        return view('event.show', compact('events'));
    }

    public function create()
    {
        return view('event.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => ['required', 'string'],
            'body' => ['required','string']
        ]);

        auth()->user()->event()->create($data);

        return view('event.success');
    }
}

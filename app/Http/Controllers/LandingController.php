<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Event;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function __invoke()
    {
        $biographies = About::all();

        $events = Event::all();

        return view('landing.show', compact(['biographies','events']));
    }
}

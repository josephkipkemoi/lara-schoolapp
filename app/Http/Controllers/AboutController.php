<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    //
    public function __invoke()
    {
        $biographies = About::all();

        return view('about.show', compact('biographies'));
    }
    
    public function create()
    {
        return view('about.create');    
    }

    public function store()
    {
        $data = request()->validate([
            'school_background' => ['required', 'string'],
            'academic_background' => ['required', 'string']
        ]);

        About::create($data);

        return view('about.success');
    }

 
}

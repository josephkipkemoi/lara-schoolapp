<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    //
    public function __invoke()
    {
        return view('personnel.store');
    }

    public function store()
    {
        $data = request()->validate([
            'first_name' => ['required','string'],
            'last_name' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'position' => ['required', 'string']
        ]);  
        
        Personnel::create($data);
       
        return view('personnel.success');
    }

    public function destroy($id)
    {
        $person = Personnel::find($id);

        $person->delete();

        return view('personnel.destroy');
    }
}

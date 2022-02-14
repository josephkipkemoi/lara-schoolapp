<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function __invoke()
    {
        $personnel = Personnel::all();

        return view('staff.show', compact('personnel'));
    }
}

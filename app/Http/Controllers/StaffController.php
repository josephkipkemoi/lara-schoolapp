<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function __invoke()
    {
        return view('staff.show');
    }
}

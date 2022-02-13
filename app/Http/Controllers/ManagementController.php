<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    //
    public function __invoke()
    {
        return view('management.show');
    }   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //
    public function __invoke()
    {
        return view('download.show');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function __invoke()
    {
        $albums = Album::all();

        return view('gallery.show', compact('albums'));
    }
}

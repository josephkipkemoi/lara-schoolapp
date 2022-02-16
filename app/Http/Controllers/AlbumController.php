<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    //
    public function create()
    {
        return view('album.create');
    }

    public function store()
    {
        $data = request()->validate([
            'album_name' => ['required','string'],
            'photo' => ['required']
        ]);

        $album = Album::create([
            'album_name' => $data['album_name']
        ]);

        $photos = request()->file('photo');

        foreach($photos as $photo)
        {
            $album->photo()->create([
                'photo' => $photo->getClientOriginalName()
            ]);
        }
      

        return view('album.success');
    }

    public function show($id)
    {
        $photos = Album::find($id)->photo;

        return view('album.show', compact('photos'));
    }
}

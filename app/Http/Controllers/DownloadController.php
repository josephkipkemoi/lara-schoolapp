<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //
    public function __invoke()
    {
        $downloads = Download::all();

        return view('download.show', compact('downloads'));
    }

    public function create()
    {
        return view('download.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => ['required', 'string'],
            'download_file' => ['required', 'file']
        ]);

        Download::create([
            'title' => $data['title'],
            'download_file' => request()->file('download_file')->getClientOriginalName()
        ]);

        return redirect()->route('download.create');
    }
}

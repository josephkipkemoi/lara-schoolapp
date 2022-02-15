<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\SchoolReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    //
    public function __invoke()
    {
        $school_reports = SchoolReport::all();

        $reports = Report::all();

        return view('report.show', compact(['school_reports','reports']));
    }

    public function create()
    {
        return view('report.create');
    }
  
    public function store()
    {
         $data = request()->validate([
            'grade' => ['required'],
            'term' => ['required'],
            'year' => ['required']
        ]);

        Report::create([
            'grade' => $data['grade'],
            'term' => $data['term'],
            'year' => $data['year'],
            'report_file' => request()->file('report_file')->getClientOriginalName()
        ]);


        $stored = Storage::disk('local')->put(request()->file('report_file')->getClientOriginalName(), 'Contents');

        return view('report.schoolreportsuccess');

    }

    public function storereport()
    {
        $data = request()->validate([
            'body' => ['required']
        ]);

        auth()->user()->school_report()->create($data);

        return view('report.schoolreportsuccess');
    }

    public function deletereport($id)
    {
        SchoolReport::find($id)->delete();

        return view('report.schoolreportdeleted');
    }

}

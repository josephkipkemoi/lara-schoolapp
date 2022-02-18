<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Staff;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    //
    public function create()
    {
        $departments = Department::all();

        return view('management.create', compact('departments'));
    }

    public function store()
    {
        $data = request()->validate([
            'full_name' => ['required', 'string'],
            'department' => ['required', 'string'],
            'role' => ['required', 'string']
        ]);

        $staff = Staff::create([
            'full_name' => $data['full_name'],
            'role' => $data['role']
        ]);

        $staff->department()->attach($data['department']);

        return to_route('management.success');
    }
}

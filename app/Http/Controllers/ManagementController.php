<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    //
    public function __invoke()
    {
        $senior_management = Department::find(1)->staff;
        $board_management = Department::find(2)->staff;
        $parents_management = Department::find(3)->staff;
        $teaching_management = Department::find(4)->staff;
        $non_teaching_management = Department::find(5)->staff;

        return view('management.show', compact(['senior_management','board_management','parents_management','teaching_management','non_teaching_management']));
    }   
}

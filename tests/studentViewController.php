<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use App\Models\Student;
use Illuminate\Http\Request;

class studentViewController extends Controller
{

    // public $selectedFundSource;

    public function adminView(Request $request)
    {
        $sourceId = $request->route('source_id');

        $fund = Fund::where('source_id', $sourceId)->first();
        $studentId = $fund->student_id;

        $students = Student::where('student_id', $studentId)->get();


        return view('admin.scholarship.student-view', compact('students'));
    }

    public function staffView(Request $request)
    {
        $sourceId = $request->route('source_id');

        $fund = Fund::where('source_id', $sourceId)->first();
        $studentId = $fund->student_id;

        $students = Student::where('student_id', $studentId)->get();

        return view('staff.scholarship.student-view', compact('students'));
    }
    public function nlucView(Request $request)
    {
        $sourceId = $request->route('source_id');

        $fund = Fund::where('source_id', $sourceId)->first();
        $studentId = $fund->student_id;

        $students = Student::where('student_id', $studentId)->get();


        return view('campus-NLUC.scholarship.student-view', compact('students'));
    }
}



<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipName;
use Illuminate\Http\Request;

class SourcesController extends Controller
{
    public function funds($scholarship) {
        $scholarships = ScholarshipName::findOrFail($scholarship);
        return view('admin.scholarship.funds', [
            'scholarships' =>  $scholarships,
        ]);
    }
}
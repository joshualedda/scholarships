<?php

namespace App\Http\Controllers;

class reportController extends Controller
{

    public function adminReport()
    {
        return view('admin.settings.reports');
    }
    public function nlucReport()
    {
        return view('campus-NLUC.settings.reports');
    }
}

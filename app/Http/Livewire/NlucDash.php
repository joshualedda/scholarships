<?php

namespace App\Http\Livewire;

use App\Models\Campus;
use App\Models\Student;
use Livewire\Component;
use App\Models\ScholarshipName;
use Illuminate\Support\Facades\DB;

class NlucDash extends Component
{

    public $governmentCount, $privateCount;
    public $governmentStudent, $privateStudent;
    public $active, $inactive;
    public $scholarshipActive, $scholarshipInactive;
    public $chartData;

    public function mount()
    {
        $campus = Campus::where('campus_name', 'NLUC')->first();
        // $data = [];

        if ($campus) {
            $studentCount = Student::where('campus', $campus->campusDesc)->count();
            $data[] = [
                'campus' => $campus->campus_name,
                'studentCount' => $studentCount,
            ];

            // Continue with other data gathering based on $campus
        }

        $this->chartData = $data;


        // 1st card
        // Count government scholarship names
        $this->governmentCount = ScholarshipName::where('scholarship_type', 0)->count();

        // Count private scholarship names
        $this->privateCount = ScholarshipName::where('scholarship_type', 1)->count();

        // scholarship active and inactiive
        $this->scholarshipActive = ScholarshipName::where('status', 0)->count();
        $this->scholarshipInactive = ScholarshipName::where('status', 1)->count();
        //

     // 2nd card
    // Count scholars in government
    $this->governmentStudent = Student::where('campus', 'Don Mariano Marcos Memorial State  University North La Union Campus')->where('scholarshipType', 0)->count();

    // Count scholars in private
    $this->privateStudent = Student::where('campus', 'Don Mariano Marcos Memorial State  University North La Union Campus')->where('scholarshipType', 1)->count();

    // active and inactive
    $this->active = Student::where('campus', 'Don Mariano Marcos Memorial State  University North La Union Campus')->where('student_status', 0)->distinct('student_id')->count();
    $this->inactive = Student::where('campus', 'Don Mariano Marcos Memorial State  University North La Union Campus')->where('student_status', 1)->distinct('student_id')->count();




    }

    public function render()
    {
        return view('livewire.nluc-dash');
    }
}

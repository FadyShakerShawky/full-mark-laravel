<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function show($id)
    {
        $data = Student::find($id);
        return view('student-profile', ["data"=>$data]);
    }
}
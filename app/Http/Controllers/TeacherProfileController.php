<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\User;

class TeacherProfileController extends Controller
{
    public function index(){

        $teacher = new Teacher;

        $teacher  = $teacher->all();

        return view('teacher-profile' , ["data" => $teacher]);
    }

    public function index1(){

        $teacher = new Teacher;

        $teacher  = $teacher->all();

        return view('index' , ["data" => $teacher]);
    }
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher-profile' , ["data" => $teacher]);
    }
}

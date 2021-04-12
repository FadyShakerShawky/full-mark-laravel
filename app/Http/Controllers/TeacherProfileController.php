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

}

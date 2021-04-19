<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Fourmaxrating;
use App\Models\Teacher;
use App\Models\User;

class FourmaxratingController extends Controller
{
    //

    public function index1(){
        $count = DB::table('courses')->count('id');



        $teacher = new Fourmaxrating;

        $teacher  = $teacher->all();

        return view('index' , ["data" => $teacher ,'counts'=> $count]);
    }
}

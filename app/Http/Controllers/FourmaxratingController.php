<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fourmaxrating;
use App\Models\Teacher;
use App\Models\User;

class FourmaxratingController extends Controller
{
    //

    public function index1(){

        $teacher = new Fourmaxrating;

        $teacher  = $teacher->all();

        return view('index' , ["data" => $teacher]);
    }
}

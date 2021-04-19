<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Group;


class GroupController extends Controller
{
    //
    public function index()
    {
        return view("group");
    }

    public function store(){
        $group = new Group;

        $group->description = request('description');

        $group->max_no_student = request('max_no_student');

        $group->start_date = request('start_date');

        $group->end_date = request('end_date');

        $group->start_time = request('start_time');

        $group->end_time = request('end_time');

        $group->no_lec = request('no_lec');

        $group->price = request('price');

        $group->save();

        return view('group');



    }
}

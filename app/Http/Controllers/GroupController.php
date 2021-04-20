<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Group;

use Illuminate\Support\Facades\DB;



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

    public function showGroup($id)
    {
        $result = DB::table('course_teachers')
        ->join('teachers', 'teachers.id', '=', 'course_teachers.teacher_id')
        ->join( 'group_students' ,'group_students.course_teacher_id' , '=' , 'course_teachers.id')
        ->join('groups' , 'groups.id' , '=' , 'group_students.group_id')
        ->join('courses' ,'courses.id' , '=' , 'course_teachers.course_id')
        ->where('teachers.id' , '=' , $id)
        ->select('courses.name as courseName','groups.description as description','groups.max_no_student','groups.start_date as sd','groups.end_date as ed',
        'groups.start_time as st','groups.end_time as et','groups.end_time','groups.no_lec','groups.price as p')
        ->get();

            return view('allgroups',["data" => $result]);
    }
}

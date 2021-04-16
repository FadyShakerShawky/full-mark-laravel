<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTeacher;
use Illuminate\Support\Facades\DB;

class CourseTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CourseTeacher::findOrFail($id);
        return view('search-courses', ['data'=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function searchByName(){
        $text = "";
        if( isset($_REQUEST['text']) ){
            $text = $_REQUEST['text'];
        }
        $data = DB::table('course_teachers')
                        ->join('courses', 'course_teachers.course_id', '=', 'courses.id')
                        ->join('teachers', 'course_teachers.teacher_id', '=', 'teachers.id')
                        ->join('users', 'users.id', '=', 'teachers.user_id')
                        // ->join('group_students', 'course_teachers.id', '=', 'group_students.course_teacher_id')
                        // ->join('groups', 'groups.id', '=', 'group_students.group_id')
                        ->where('courses.name' , 'like' , '%' . $text . '%')
                        ->orWhere('courses.description' , 'like' , '%' . $text . '%')
                        ->orWhere('teachers.description' , 'like' , '%' . $text . '%')
                        ->orWhere('users.name' , 'like' , '%' . $text . '%')
                        ->select('course_teachers.id' , 'users.name as teacherName','teachers.id as teacherId','courses.name as courseName', 'courses.description')
                        ->limit(8)
                        ->get();
            return view('search-courses', ['data'=> $data , 'searchText' =>$text ]);
    }


    public function extinsiveSearch(){
        $searchParams = json_decode($_REQUEST['searchParams'], true);
        $searchCourses = $searchParams['searchCourses'];
        $result = DB::table('course_teachers')
                        ->join('courses', 'course_teachers.course_id', '=', 'courses.id')
                        ->join('teachers', 'course_teachers.teacher_id', '=', 'teachers.id')
                        ->join('users', 'users.id', '=', 'teachers.user_id')
                        ->join('group_students', 'course_teachers.id', '=', 'group_students.course_teacher_id')
                        ->join('groups', 'groups.id', '=', 'group_students.group_id')
                        ->whereBetween('groups.price' ,[ $searchParams['minPrice'] , $searchParams['maxPrice']])
                        ->where(function ($query) {
                            // dd($searchParams);
                            // $query->where('courses.name' , 'like' , '%' . $searchParams['searchText'] . '%')
                            //         ->orWhere('courses.description' , 'like' , '%' . $searchParams['searchText'] . '%')
                            //         ->orWhere('teachers.description' , 'like' , '%' . $searchParams['searchText'] . '%')
                            //         ->orWhere('users.name' , 'like' , '%' . $searchParams['searchText'] . '%');
                        })
                        ->select('course_teachers.id','groups.price' , 'users.name as teacherName','teachers.id as teacherId','courses.name as courseName', 'courses.description')
                        ->limit(8)
                        ->get();
        return $result;
    }
    

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}